<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
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
        // Validate request
        $validator = Validator::make($request->all(), [
            'post_id' => 'required|integer|exists:posts,id', // ID of the post
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
    }
    public function getComments($post_id)
{
    $comments = Comment::where('post_id', $post_id)->orderBy('created_at', 'desc')->get();

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
