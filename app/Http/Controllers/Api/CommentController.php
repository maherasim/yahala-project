<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
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
            'content' => 'required',
            'type' => 'required',
        ]);

        $comment = new Comment;
        
        foreach ($this->fields as $item) {
            if ($request->has($item))
                $comment[$item] = $request[$item];
        }

        $comment->save();

        $comment->time = $this->formatCreatedAt($comment->created_at);
        $comment->user = $comment->user;

        return response()->json(['success' => true, 'data' => $comment, 'message' => 'Comment saved.']);
    }

    public function get_comment($type, $id , $parent_id = null)
    {
       
        $query = Comment::where($type, $id);
        if(is_null($parent_id)){
            $comments = $query->with(['user:id,name,image' , 'gallery'])->orderBy('id', 'asc')->get();
    
        }else{
            $comments = $query->where('comment_id',$parent_id)->where('is_rply',1)->get();

        }
    
        $formattedComments = $comments->map(function ($comment) {
            $comment->time = $this->formatCreatedAt($comment->created_at);
            return $comment;
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
                'image' => $imagePath,
                'audio' => $audioPath,
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
            // Log the request for debugging
            Log::info("Fetching comments for post_id: " . $post_id);
    
            // Validate post_id format (MongoDB ObjectId)
            if (!preg_match('/^[0-9a-fA-F]{24}$/', $post_id)) {
                return response()->json(['error' => 'Invalid post ID format'], 422);
            }
    
            // Check if the post exists
            $postExists = Post::where('_id', $post_id)->exists();
            if (!$postExists) {
                return response()->json(['error' => 'Post not found'], 404);
            }
    
            // Fetch comments for the given post
            $comments = Comment::where('post_id', $post_id)->orderBy('created_at', 'desc')->get();
    
            if ($comments->isEmpty()) {
                return response()->json(['message' => 'No comments found for this post'], 200);
            }
    
            // Append full URLs for images and audio files
            $comments->transform(function ($comment) {
                if ($comment->image) {
                    $comment->image = url('storage/' . $comment->image);
                }
                if ($comment->audio) {
                    $comment->audio = url('storage/' . $comment->audio);
                }
                return $comment;
            });
    
            return response()->json(['comments' => $comments], 200);
    
        } catch (ModelNotFoundException $e) {
            // Handle model not found (e.g., Post or Comment not found)
            return response()->json([
                'error' => 'Resource not found',
                'message' => $e->getMessage()
            ], 404);
    
        } catch (Exception $e) {
            // Log full error for debugging
            Log::error("Error fetching comments: " . $e->getMessage(), [
                'exception' => get_class($e),
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);
    
            // Return detailed error response
            return response()->json([
                'error' => 'Internal Server Error',
                'exception' => get_class($e),  // Exception type
                'message' => $e->getMessage(), // Actual error message
                'file' => $e->getFile(),       // File where error occurred
                'line' => $e->getLine()        // Line number of error
            ], 500);
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
