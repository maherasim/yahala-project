<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
 use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $fields = [
        "user_id",
        "post_id",
        "parent_id",
        "content",
        "status",
        "type",
        "feed_id",
        "news_id",
        "history_id",
        "vote_id",
        "music_id",
        "emoji_id",
        "audio_path",
        "duration",
        "post_gallery_id"
    ];

 
    
    public function store_comment(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'post_id' => 'required',
            'type' => 'required|in:text,audio,emoji,image',
            'comment' => 'nullable|string|required_if:type,text',
            'emoji' => 'nullable|string|required_if:type,emoji',
            'audio' => 'nullable|file|mimes:mp3,wav,aac|required_if:type,audio',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif|required_if:type,image',
            'parent_id' => 'nullable|exists:comments,_id',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }
    
        // Create a new comment
        $comment = new Comment();
        $comment->user_id = $request->user_id;
        $comment->feed_id = $request->post_id;
       // $comment->post_id = $request->post_id;

        $comment->type = $request->type;
        $comment->comment_type = 'normal';
        $comment->feed_type = 'admin_feeds';


        $comment->comment = $request->comment ?? null;
        $comment->emoji = $request->emoji ?? null;
        $comment->parent_id = $request->parent_id ?? null;
    
        // Handle file uploads (store relative path only)
        if ($request->hasFile('audio')) {
            $comment->audio = $request->file('audio')->store('comments/audio', 'public');
        }
    
        if ($request->hasFile('image')) {
            $comment->image = $request->file('image')->store('comments/images', 'public');
        }
    
        $comment->save();
    
        return response()->json([
            'success' => true,
            'data' => $comment,
            'message' => $comment->parent_id ? 'Reply saved successfully.' : 'Comment saved successfully.',
        ]);
    }
    
    
 
    public function get_comment($post_id)  
    {
        $baseUrl = Config::get('app.url'); // Get base URL
    
        // Fetch main comments for the post (where parent_id is null)
        $comments = Comment::where('post_id', $post_id)
            ->whereNull('parent_id')
            ->with(['user:id,name,image'])
            ->get();
    
        // Format comments with nested replies
        $formattedComments = $comments->map(function ($comment) use ($baseUrl) {
            return $this->format_comment($comment, $baseUrl);
        });
    
        return response()->json(['success' => true, 'data' => $formattedComments]);
    }
    
    /**
     * Recursive function to format comments and fetch nested replies
     */
    private function format_comment($comment, $baseUrl)
    {
        return [
            'id' => $comment->_id,
            'type' => $comment->type, // Use the type directly from the DB
            'user_profile' => !empty($comment->user->image) 
                ? $baseUrl . Storage::url($comment->user->image) 
                : $baseUrl . '/images/default-user.png',
            'user_name' => $comment->user->name ?? 'Unknown User',
            'created_at' => $this->formatCreatedAt($comment->created_at),
            'comment' => $comment->comment ?? '',
            'noLikes' => number_format($comment->likes ?? 0) . 'k',
            'audio' => !empty($comment->audio) ? $baseUrl . Storage::url($comment->audio) : null,
            'emoji' => $comment->emoji !== "null" ? $comment->emoji : null, // Fix null issue
            'image' => !empty($comment->image) ? $baseUrl . Storage::url($comment->image) : null,
            'replies' => $this->get_replies($comment->_id, $baseUrl),
        ];
    }
    
    
    
    
    /**
     * Get all replies recursively
     */
    private function get_replies($parent_id, $baseUrl)
    {
        $replies = Comment::where('parent_id', $parent_id)
            ->with('user:id,name,image')
            ->get();
    
        return $replies->map(function ($reply) use ($baseUrl) {
            return $this->format_comment($reply, $baseUrl); // Recursively format replies
        });
    }
    
    
    /**
     * Fetch nested replies recursively
     */
 
    
    
    public function store(Request $request)
    {
        try {
            // Validate request
            $validator = Validator::make($request->all(), [
                'post_id' => ['required', 'string', 'regex:/^[0-9a-fA-F]{24}$/'],  
                'text' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'audio' => 'nullable|mimes:mp3,wav,aac|max:5120',
                'emoji' => 'nullable|string',
            ]);
    
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 422);
            }
    
            // Base storage path
            $baseUrl = url('public/storage');
    
            // Store image if uploaded
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('comments/images', 'public');
            }
    
            // Store audio if uploaded
            $audioPath = null;
            if ($request->hasFile('audio')) {
                $audioPath = $request->file('audio')->store('comments/audio', 'public');
            }
    
            // Create comment
            $comment = Comment::create([
                'post_id' => $request->post_id,
                'text' => $request->text,
                'image' => $imagePath ? "$baseUrl/$imagePath" : null, // Convert to full URL
                'audio' => $audioPath ? "$baseUrl/$audioPath" : null, // Convert to full URL
                'emoji' => $request->emoji,
            ]);
    
            return response()->json(['message' => 'Comment posted successfully', 'comment' => $comment], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong!', 'details' => $e->getMessage()], 500);
        }
    }
    
 
    public function getComments($post_id)
    {
        try {
            // Fetch comments by post_id
            $comments = Comment::where('post_id', $post_id)->orderBy('created_at', 'desc')->get();
    
            // Base storage path
            $baseUrl = url('public/storage');
    
            // Append full URLs for images and audio files
            $comments->transform(function ($comment) use ($baseUrl) {
                if ($comment->image) {
                    $comment->image = "$baseUrl/{$comment->image}";
                }
                if ($comment->audio) {
                    $comment->audio = "$baseUrl/{$comment->audio}";
                }
                return $comment;
            });
    
            return response()->json(['comments' => $comments], 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'Something went wrong!', 'message' => $e->getMessage()], 500);
        }
    }
    
    



    private function formatCreatedAt($createdAt)
    {
        $now = time();
        $createdAtTimestamp = strtotime($createdAt);
        $diffInSeconds = $now - $createdAtTimestamp;

        if ($diffInSeconds >= 31536000) {
            $years = floor($diffInSeconds / 31536000);
            return $years . ' yr' . ($years > 1 ? 's' : '');
        } elseif ($diffInSeconds >= 2592000) {
            $months = floor($diffInSeconds / 2592000);
            return $months . ' mon' . ($months > 1 ? 's' : '');
        } elseif ($diffInSeconds >= 86400) {
            $days = floor($diffInSeconds / 86400);
            return $days . ' day' . ($days > 1 ? 's' : '');
        } elseif ($diffInSeconds >= 3600) {
            $hours = floor($diffInSeconds / 3600);
            return $hours . ' hr' . ($hours > 1 ? 's' : '');
        } elseif ($diffInSeconds >= 60) {
            $minutes = floor($diffInSeconds / 60);
            return $minutes . ' min' . ($minutes > 1 ? 's' : '');
        } else {
            return 'Just now';
        }
    }
}
