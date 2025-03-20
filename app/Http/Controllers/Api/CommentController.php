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
        $request->validate([
            'user_id' => 'required',
            'post_id' => 'required',
            'type' => 'required',             
            'text' => 'nullable|string',
            'emoji' => 'nullable|string', // Changed from file to string
            'audio' => 'nullable|file|mimes:mp3,wav,aac',
        ]);
    
        $comment = new Comment();
    
        $comment->user_id = $request->user_id;
        $comment->post_id = $request->post_id;
        $comment->type = $request->type;
        $comment->content = $request->content ?? null;
        $comment->text = $request->text ?? null;
        
        // Store emoji as a string
        $comment->emoji = $request->emoji ?? null;
    
        // Handle audio file upload
        if ($request->hasFile('audio')) {
            $audioPath = $request->file('audio')->store('comments/audio', 'public');
            $comment->audio_path = $audioPath;
        }
    
        $comment->save();
    
        $comment->time = $this->formatCreatedAt($comment->created_at);
        $comment->user = $comment->user;
    
        return response()->json(['success' => true, 'data' => $comment, 'message' => 'Comment saved successfully.']);
    }
    
    
 
    public function get_comment($type, $id, $parent_id = null) 
    {
        $baseUrl = Config::get('app.url'); // Get base URL
        
        $query = Comment::where($type, $id);
    
        if (is_null($parent_id)) {
            $comments = $query->with(['user:id,name,image', 'gallery', 'replies.user:id,name,image'])->orderBy('id', 'asc')->get();
        } else {
            $comments = $query->where('comment_id', $parent_id)->where('is_rply', 1)->with('user:id,name,image')->get();
        }
    
        $formattedComments = $comments->map(function ($comment) use ($baseUrl) {
            return [
                'id' => $comment->id,
                'user_profile' => !empty($comment->user->image) 
                    ? $baseUrl . Storage::url($comment->user->image) 
                    : $baseUrl . '/images/default-user.png',
                'user_name' => $comment->user->name ?? 'Unknown User',
                'created_at' => $this->formatCreatedAt($comment->created_at),
                'comment' => $comment->comment_text ?? '',
                'noLikes' => number_format($comment->likes ?? 0) . 'k',
                'type' => !empty($comment->audio_path) ? 'audio' : 'text',
                'audio' => !empty($comment->audio_path) ? $baseUrl . Storage::url($comment->audio_path) : null,
                'emoji' => !empty($comment->emoji) ? $baseUrl . Storage::url($comment->emoji) : null,
                'replies' => $comment->replies->map(function ($reply) use ($baseUrl) {
                    return [
                        'id' => $reply->id,
                        'user_profile' => !empty($reply->user->image) 
                            ? $baseUrl . Storage::url($reply->user->image) 
                            : $baseUrl . '/images/default-user.png',
                        'user_name' => $reply->user->name ?? 'Unknown User',
                        'created_at' => $this->formatCreatedAt($reply->created_at),
                        'comment' => $reply->comment_text ?? '',
                        'noLikes' => number_format($reply->likes ?? 0) . 'k',
                        'type' => !empty($reply->audio_path) ? 'audio' : 'text',
                        'audio' => !empty($reply->audio_path) ? $baseUrl . Storage::url($reply->audio_path) : null,
                        'emoji' => !empty($reply->emoji) ? $baseUrl . Storage::url($reply->emoji) : null,
                    ];
                }),
            ];
        });
    
        return response()->json(['success' => true, 'data' => $formattedComments]);
    }
    
    
    public function store(Request $request)
    {
        try {
            // Validate request
            $validator = Validator::make($request->all(), [
                'post_id' => ['required', 'string', 'regex:/^[0-9a-fA-F]{24}$/'], // Validate MongoDB ObjectId
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
