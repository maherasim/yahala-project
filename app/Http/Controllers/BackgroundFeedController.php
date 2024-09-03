<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Models\AnimationEmoji;
use App\Models\BackgroundFeed;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackgroundFeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = "all";
        if (request()->show)
            $show = request()->show;

        switch ($show) {
            case "all":
                $posts = Post::with('gallery')->orderBy("updated_at", "desc")->get();
                $animated_emoji = [];
                break;
            case "fanpage":
                $posts = Post::with('gallery')->orderBy("updated_at", "desc")->get();
                $animated_emoji = [];
                break;
            case "reported":
                $posts = Post::whereExists(function ($query) {
                    $query->select(DB::raw(1))
                        ->from('reports')
                        ->whereColumn('reports.reported_post_id', 'posts.id')
                        ->where('status', 0);
                })->orderBy("posts.updated_at", "desc")->get();
                $animated_emoji = [];
                break;
            case "admin":
                $posts = Post::where("user_id", null)->orderBy("updated_at", "desc")->get();
                $animated_emoji = [];
                break;
            case "background":
                $background_post = BackgroundFeed::get();
                $posts = [];
                $animated_emoji = [];
                break;
            case "animated":
                $animated_emoji = AnimationEmoji::get();
                $posts = [];
        }
        $allPosts = $posts;
        if ($show !== "all")
            $allPosts = Post::orderBy("updated_at", "desc")->get();

        $totalPosts = $allPosts->count();
        $totalUserPosts = $allPosts->filter(function ($post) {
            return $post->user_id !== null;
        })->count();
        $totalAdminPosts = $allPosts->filter(function ($post) {
            return $post->user_id === null;
        })->count();

        $background_post = BackgroundFeed::get();
        $animated = AnimationEmoji::get();

        return view('content.posts.index', compact("posts", "totalPosts", "totalUserPosts", "totalAdminPosts", "background_post", "show", "animated_emoji"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'background_name' => 'required'
        ]);

        $model = new BackgroundFeed();
        $model->name = $request->background_name;
        if (!empty($request->background_image)) {
            $imgPath = Helpers::fileUpload($request->background_image, "images/background_feed");
            $model->image = $imgPath;
        }
        if ($model->save()) {
            return redirect()->route('feed.background')->with('success', 'Background Feed Has been inserted');
        } else {
            return redirect()->route('feed.background')->with('error', 'Failed to add Background Feed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BackgroundFeed  $backgroundFeed
     * @return \Illuminate\Http\Response
     */
    public function show(BackgroundFeed $backgroundFeed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BackgroundFeed  $backgroundFeed
     * @return \Illuminate\Http\Response
     */
    public function edit(BackgroundFeed $backgroundFeed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BackgroundFeed  $backgroundFeed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BackgroundFeed $backgroundFeed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BackgroundFeed  $backgroundFeed
     * @return \Illuminate\Http\Response
     */
    public function destroy(BackgroundFeed $backgroundFeed)
    {
        if($backgroundFeed->delete()){
            return redirect()->route('feed.background')->with('success', 'Background Feed Has been Deleted!');
        }else{
            return redirect()->route('feed.background')->with('error', 'Something Went Wrong!');
        }
    }
}
