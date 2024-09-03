<?php

namespace App\Http\Controllers;
use App\Helpers\Helpers;
use App\Models\AnimationEmoji;
use App\Models\ProfileBanner;
use App\Models\Post;
use Illuminate\Support\Facades\Log;
 
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProfileBannerController extends Controller
{
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
                $background_post = ProfileBanner::get();
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

        $banner = ProfileBanner::get();
        $animated = AnimationEmoji::get();

        return view('content.profilebanner.index', compact("posts", "totalPosts", "totalUserPosts", "totalAdminPosts", "banner", "show", "animated_emoji"));
    }
    public function store(Request $request)
    {
        $request->validate([
            'banner_name' => 'required'
        ]);

        $model = new ProfileBanner();
        $model->name = $request->banner_name;
        if (!empty($request->banner_image)) {
            $imgPath = Helpers::fileUpload($request->banner_image, "images/banner_image");
            $model->image = $imgPath;
        }
        if ($model->save()) {
            return redirect()->route('profile.banner')->with('success', 'Profile Banner   Has been inserted');
        } else {
            return redirect()->route('profile.banner')->with('error', 'Failed to add Profile Banner');
        }
    }

    // public function destroy(ProfileBanner $ProfileBanner)
    // {
    //     if($ProfileBanner->delete()){
    //         return redirect()->route('profile.banner')->with('success', 'Profile Banner  Has been Deleted!');
    //     }else{
    //         return redirect()->route('profile.banner')->with('error', 'Something Went Wrong!');
    //     }
    // }
    public function destroy(ProfileBanner $profilebanner)
    {
        try {
            Log::info('Attempting to delete banner with ID: ' . $profilebanner->_id);
            $profilebanner->delete();
            Log::info('Successfully deleted banner with ID: ' . $profilebanner->_id);
            return redirect()->route('profile.banner')->with('success', 'Banner has been deleted!');
        } catch (\Exception $e) {
            Log::error('Error deleting banner: ' . $e->getMessage());
            return redirect()->route('profile.banner')->with('error', 'Something went wrong!');
        }
    }
}
