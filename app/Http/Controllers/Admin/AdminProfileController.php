<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helpers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Feed;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Activitylog\Models\Activity;

class AdminProfileController extends Controller
{
    public function index()
    {
        $activity = Auth::user()->actions()->orderBy('created_at', 'DESC')->paginate(20);
        // return view('content.admin_profile.index', compact("activity"));
        return view('content.pages.pages-account-settings-account', compact('activity'));
    }

    public function welcome(){
        return view('content.welcome');
    }

    public function admin_activity()
    {
        $events = Event::all();
        $news = News::all();
        $feeds = Feed::all();
        return view('content.pages.admin_activity',compact('events','news','feeds'));
    }

    public function store(Request $request)
    {

        $profile = User::find(auth()->user()->id);
        if (!empty($request->name) && $request->name !== "") {
            $profile->name = $request->name;
        }
        if (!empty($request->last_name) && $request->last_name !== "") {
            $profile->last_name = $request->last_name;
        }
        if (!empty($request->email) && $request->email !== "") {
            $profile->email  = $request->email;
        }
        if (!empty($request->phone) && $request->phone !== "") {
            $profile->phone  = $request->phone;
        }
        if (!empty($request->password) && $request->password !== "") {
            $profile->password  = Hash::make($request->password);
        }
        // unlink($profile->image);
        if ($request->has('image')) {
            $image_path = Helpers::fileUpload($request->image, 'images/user');
            $profile->image = $image_path;
        }
        if ($profile->update()) {
            return back()->with('success', 'Your profile has been updated');
        } else {
            return back()->with('error', 'Failed to Update your profile');
        }
    }

    public function security()
    {
        return view('content.pages.pages-account-settings-security');
    }

    public function enable(Request $request)
    {

        if ($request->has('enable')) {
            auth()->user()->enable_2fa  = true;
            auth()->user()->save();
            return back()->with('success', 'Two Factor Authentication Enabled');
        } else {
            auth()->user()->enable_2fa  = false;
            auth()->user()->save();
            return back()->with('error', 'Two Factor Authentication Disabled');
        }
    }

    public function account()
    {
        $activity = Auth::user()->actions()->orderBy('created_at', 'DESC')->paginate(20);

        return view('content.pages.pages-account-settings-account', compact('activity'));
    }
    public function billing()
    {
        return view('content.pages.pages-account-settings-billing');
    }
    public function notification()
    {
        return view('content.pages.pages-account-settings-notifications');
    }
    public function connection()
    {
        return view('content.pages.pages-account-settings-connections');
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required',
            'confirmPassword' => 'required'
        ]);
        if (!Hash::check($request->currentPassword, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        } else {
            if ($request->newPassword == $request->confirmPassword) {

                User::whereId(auth()->user()->id)->update([
                    'password' => Hash::make($request->newPassword)
                ]);
                return back()->with("success", "Password changed successfully!");
            } else {
                return back()->with('error', 'Your New Password  and Confirm Password  is not matched');
            }
        }
    }

    public function store_news(Request $request)
    {
        $news = News::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_type' => $request->user_type,
            'image' => $request->image,
            'image_type' => (int)$request->image_type,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'comments' => (int)$request->comments ?? 0,
            'voice_comments' => (int)$request->voice_comments ?? 0,
            'share' => (int)$request->share ?? 0,
            'emotion' => (int)$request->emotion ?? 0,
            'status' => $request->status,
        ]);
        return back();
    }

    public function store_event(Request $request)
    {
        // $request->dd();
        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);
        return back();
    }

    public function store_feeds(Request $request)
    {
        // $request->dd();
        $feeds = Feed::create([
            'feed_background_image' => $request->feed_background_image,
            'feed_text_color' => $request->feed_text_color,
            'grid_style' => $request->grid_style,
            'image_type' => (int)$request->image_type,
            'description' => $request->description,
            'user_type' => $request->user_type,
            'feed_type' => $request->feed_type,
            'image' => $request->image,
            'image_file_name' => $request->image_file_name,
            'image_file_length' => $request->image_file_length,
            'image_file_size' => $request->image_file_size,
            'video' => $request->video,
            'video_file_name' => $request->video_file_name,
            'video_file_length' => $request->video_file_length,
            'video_file_size' => $request->video_file_size,
        ]);
        return back();
    }
}
