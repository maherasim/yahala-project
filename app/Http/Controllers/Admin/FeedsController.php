<?php

namespace App\Http\Controllers\Admin;

use App\Events\AdminFeedsComments;
use App\Events\HistoryComments;
use App\Events\UserFeedsComments;
use App\Helpers\ResponseHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Feed;
use App\Models\FeedComments;
use App\Models\FeedLikes;
use App\Models\History;
use App\Models\News;
use App\Models\PopFeeds;
use App\Models\User;
use Exception;
use FFMpeg\FFMpeg;
use Illuminate\Support\Facades\Auth;

class FeedsController extends Controller
{

    public function index()
    {
        $feeds = Feed::with('user')->orderBy('created_at', 'desc')->paginate(10);
        return view('content.manage_posts.manage_user_feeds', compact('feeds'));
    }

    public function news()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        return response()->json(['news' => $news, 'success' => true], 200);
    }

    public function events()
    {
        $events = Event::orderBy('created_at', 'desc')->get();
        return response()->json(['events' => $events, 'success' => true], 200);
    }

    public function store_news(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'user_type' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_type' => 'nullable|integer|min:0',
            'start_date' => 'required|date|after:today',
            'end_date' => 'nullable|date|after:start_date',
            'comments' => 'nullable|integer|min:0',
            'voice_comments' => 'nullable|integer|min:0',
            'share' => 'nullable|integer|min:0',
            'emotion' => 'nullable|integer|min:0',
            'status' => 'required',
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->user_type = $request->user_type;
        $news->image = $request->image;
        $news->image_type = (int)$request->image_type;
        $news->start_date = $request->start_date;
        $news->end_date = $request->end_date;
        $news->comments = (int)$request->comments ?? 0;
        $news->voice_comments = (int)$request->voice_comments ?? 0;
        $news->share = (int)$request->share ?? 0;
        $news->emotion = (int)$request->emotion ?? 0;
        $news->status = $request->status;
        if ($news->save()) {
            return response()->json(['message' => 'News Feed has been created Successfully', 'news' => $news, 'success' => true], 201);
        } else {
            return response()->json(['message' => 'Something went Wrong!', 'success' => false], 403);
        }
    }

    public function store_event(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'start_date' => 'required|date|after:today',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
        ]);

        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        if ($event->save()) {
            return response()->json(['message' => 'Event has been created Successfully', 'event' => $event, 'success' => true], 201);
        } else {
            return response()->json(['message' => 'Something went Wrong!', 'success' => false], 403);
        }
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'user_type' => 'required',
            'feed_type' => 'required',
        ]);
        $feeds = new Feed();
        // dd($request->all());
        if ($request->feed_type == 'text') {
            $feeds->background_image = $request->background_image;
            $feeds->text_color = $request->text_color;
        }

        $feeds->grid_style = $request->grid_style;
        // $feeds->image_type = count($request->file('images') ?? []) + count($request->file('videos') ?? []);
        $feeds->description = $request->description;
        $feeds->text = $request->text;
        $feeds->text_properties = $request->text_properties;
        $feeds->user_type = $request->user_type;
        $feeds->feed_type = $request->feed_type;
        $images = [];
        $videos = [];

        // Handle multiple image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $uniqueName = uniqid() . '___' . str_replace(' ', '_', $image->getClientOriginalName());
                $images[] = [
                    'path' => $image->storeAs("images/user_feeds", $uniqueName, "public"),
                    'name' => $image->getClientOriginalName(),
                    'size' => $image->getSize(),
                ];
            }
            $feeds->images = $images; // Store as an array of objects in MongoDB
        }

        // Handle multiple video uploads
        if ($request->hasFile('videos')) {
            foreach ($request->file('videos') as $video) {
                $uniqueName = uniqid() . '___' . str_replace(' ', '_', $video->getClientOriginalName());
                $videos[] = [
                    'path' => $video->storeAs("videos/user_feeds", $uniqueName, "public"),
                    'name' => $video->getClientOriginalName(),
                    'size' => $video->getSize(),
                    // 'length' => $this->getMediaDuration($video), // Optional
                ];
            }
            $feeds->videos = $videos; // Store as an array of objects in MongoDB
        }

        // Save the feed
        $feeds->save();

        if ($feeds->save()) {
            return response()->json(['message' => 'Feed has been created Successfully', 'feed' => $feeds, 'success' => true], 201);
        } else {
            return response()->json(['message' => 'Something went Wrong!', 'success' => false], 403);
        }
    }

    private function getMediaDuration($file)
    {
        // Initialize FFMpeg
        $ffmpeg = FFMpeg::create();
        // Open the media file (you need to get the real path of the uploaded file)
        $media = $ffmpeg->open($file->getRealPath());
        // Get the format of the file to retrieve metadata, including the duration
        $format = $media->getFormat();
        // Get duration in seconds (or any other format you want)
        $duration = $format->get('duration'); // Duration is in seconds

        return $duration;
    }

    public function getComments(Request $request)
    {
        $request->validate(['feed_id' => 'required']);

        try {
            $feedType = $request->feed_type;
            $comments = FeedComments::with(['child_comments' => function ($q) {
                $q->with(['child_comments' => function ($q) {
                    $q->with(['user' =>  function ($q) {
                        $q->select(['name', 'last_name', 'email', 'dob', 'image', 'username']);
                    }]);
                }, 'user' =>  function ($q) {
                    $q->select(['name', 'last_name', 'email', 'dob', 'image', 'username']);
                }]);
            }, 'user' => function ($q) {
                $q->select(['name', 'last_name', 'email', 'dob', 'image', 'username']);
            }])
                ->where('feed_id', $request->feed_id)->where('feed_type', $feedType)->where('parent_id', null)->get();

            $user = User::select('name', 'last_name', 'email', 'dob', 'image', 'username')->find(auth()->id());

            if ($feedType == 'admin_feeds') {
                $feed = PopFeeds::with(['user' => function ($q) {
                    $q->select(['name', 'last_name', 'email', 'dob', 'image', 'username']);
                }])->find($request->feed_id);
            } elseif ($feedType == 'history') {
                $feed = History::with(['user' => function ($q) {
                    $q->select(['name', 'last_name', 'email', 'dob', 'image', 'username']);
                }])->find($request->feed_id);
            } else {
                $feed = Feed::with(['user' => function ($q) {
                    $q->select(['name', 'last_name', 'email', 'dob', 'image', 'username']);
                }])->find($request->feed_id);
            }

            $like = FeedLikes::where('user_id', $user->id)->where('feed_id', $request->feed_id)->where('feed_type', $feedType)->first();

            if ($like) {
                $liked = true;
            } else {
                $liked = false;
            }

            $likeCount = FeedLikes::where('feed_id', $request->feed_id)->where('feed_type', $feedType)->count();
            $commentCount = FeedComments::where('feed_id', $request->feed_id)->where('feed_type', $feedType)->count();

            $data = [
                'comments' => $comments,
                'comments_count' => $commentCount,
                'feed' => $feed,
                'liked' => $liked,
                'like_count' => $likeCount,
                'user' => $user
            ];

            return ResponseHelper::sendResponse($data, 'Comment Fetch successfully');
        } catch (Exception $e) {
            return ResponseHelper::sendResponse(null, 'Failed to fetch Comment!', false, 403);
        }
    }

    public function storeComments(Request $request)
    {
        $request->validate(['comment' => 'required|string', 'feed_type' => 'required']);

        try {
            $comment = FeedComments::create([
                'user_id' => auth()->id(),
                'feed_id' => $request->feed_id,
                'feed_type' => $request->feed_type,
                'comment' => $request->comment,
                'comment_type' => $request->comment_type ?? 'normal',
                'parent_id' => $request->parent_id ?? null,
                'status' => 1
            ]);

            $comments = FeedComments::with(['child_comments' => function ($q) {
                $q->with(['child_comments' => function ($q) {
                    $q->with(['user' =>  function ($q) {
                        $q->select(['name', 'last_name', 'email', 'dob', 'image', 'username']);
                    }]);
                }, 'user' =>  function ($q) {
                    $q->select(['name', 'last_name', 'email', 'dob', 'image', 'username']);
                }]);
            }, 'user' => function ($q) {
                $q->select(['name', 'last_name', 'email', 'dob', 'image', 'username']);
            }])
                ->where('feed_id', $request->feed_id)->where('parent_id', null)->where('feed_type', $request->feed_type)->get();

            $user = User::select('name', 'last_name', 'email', 'dob', 'image', 'username')->find(auth()->id());
            $commentCount = FeedComments::where('feed_id', $request->feed_id)->where('feed_type', $request->feed_type)->count();
            $like = FeedLikes::where('user_id', $user->id)->where('feed_id', $request->feed_id)->where('feed_type', $request->feed_type)->first();

            if ($like) {
                $liked = true;
            } else {
                $liked = false;
            }

            $likeCount = FeedLikes::where('feed_id', $request->feed_id)->where('feed_type', $request->feed_type)->count();

            $data = [
                'comments' => $comments,
                'comments_count' => $commentCount,
                'liked' => $liked,
                'like_count' => $likeCount,
                'user' => $user
            ];

            switch ($request->feed_type) {
                case 'admin_feeds':
                    event(new AdminFeedsComments($data));
                    break;
                case 'history':
                    event(new HistoryComments($data));
                    break;
                default:
                    event(new UserFeedsComments($data));
                    break;
            }

            return ResponseHelper::sendResponse($data, 'Comment has been successfully sent');
        } catch (Exception $e) {
            return ResponseHelper::sendResponse(null, 'Failed to send Comment!', false, 403);
        }
    }

    public function feedLike(Request $request)
    {
        $request->validate([
            'feed_id' => 'required',
            'feed_type' => 'required',
        ]);

        $user = Auth::user();
        $postId = $request->feed_id;

        if (!$user) {
            return ResponseHelper::sendResponse(null, 'User not authenticated!', false, 403);
        }

        $like = FeedLikes::where('user_id', $user->id)->where('feed_id', $postId)->where('feed_type', $request->feed_type)->first();

        if ($like) {
            $like->delete();
            $liked = false;
        } else {
            FeedLikes::create([
                'user_id' => $user->id,
                'feed_id' => $postId,
                'feed_type' => $request->feed_type,
            ]);
            $liked = true;
        }

        $likeCount = FeedLikes::where('feed_id', $postId)->where('feed_type', $request->feed_type)->count();

        $data = [
            'liked' => $liked,
            'like_count' => $likeCount
        ];
        return ResponseHelper::sendResponse($data, 'Like has been successfully Saved');
    }
}
