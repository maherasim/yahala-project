<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helpers;
use App\Models\User;
 
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
    return response()->json(['activity' => $activity]);
}

public function welcome()
{
    return response()->json(['message' => 'Welcome']);
}

public function admin_activity()
{
    $events = Event::all();
    $news = News::all();
    $feeds = Feed::all();
    return response()->json(['events' => $events, 'news' => $news, 'feeds' => $feeds]);
}

public function store(Request $request)
{
    // Find the user profile by the given user id
    $profile = User::find($request->id);

    // Check if the user exists
    if (!$profile) {
        return response()->json(['error' => 'User not found'], 404);
    }

    // Update profile fields if provided
    if (!empty($request->name)) {
        $profile->name = $request->name;
    }
    if (!empty($request->last_name)) {
        $profile->last_name = $request->last_name;
    }
    if (!empty($request->email)) {
        $profile->email = $request->email;
    }
    if (!empty($request->phone)) {
        $profile->phone = $request->phone;
    }
    if (!empty($request->password)) {
        $profile->password = Hash::make($request->password);
    }

    // Handle image upload if exists
    if ($request->has('image')) {
        $image_path = Helpers::fileUpload($request->image, 'images/user');
        $profile->image = $image_path;
    }

    // Save and return response
    if ($profile->update()) {
        return response()->json(['success' => 'Your profile has been updated']);
    } else {
        return response()->json(['error' => 'Failed to update your profile']);
    }
}


public function security()
{
    return response()->json(['message' => 'Security settings']);
}

public function enable(Request $request)
{
    if ($request->has('enable')) {
        auth()->user()->enable_2fa = true;
        auth()->user()->save();
        return response()->json(['success' => 'Two Factor Authentication Enabled']);
    } else {
        auth()->user()->enable_2fa = false;
        auth()->user()->save();
        return response()->json(['error' => 'Two Factor Authentication Disabled']);
    }
}

public function account()
{
    $activity = Auth::user()->actions()->orderBy('created_at', 'DESC')->paginate(20);
    return response()->json(['activity' => $activity]);
}

public function billing()
{
    return response()->json(['message' => 'Billing settings']);
}

public function notification()
{
    return response()->json(['message' => 'Notification settings']);
}

public function connection()
{
    return response()->json(['message' => 'Connection settings']);
}

public function change_password(Request $request)
{
    $request->validate([
        'currentPassword' => 'required',
        'newPassword' => 'required',
        'confirmPassword' => 'required'
    ]);
    
    if (!Hash::check($request->currentPassword, auth()->user()->password)) {
        return response()->json(['error' => "Old Password Doesn't match!"]);
    } elseif ($request->newPassword == $request->confirmPassword) {
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->newPassword)
        ]);
        return response()->json(['success' => 'Password changed successfully!']);
    } else {
        return response()->json(['error' => 'Your New Password and Confirm Password do not match']);
    }
}

public function store_news(Request $request)
{
    $news = News::create($request->all());
    return response()->json(['success' => 'News created successfully']);
}

public function store_event(Request $request)
{
    $event = Event::create($request->all());
    return response()->json(['success' => 'Event created successfully']);
}

public function store_feeds(Request $request)
{
    $feeds = Feed::create($request->all());
    return response()->json(['success' => 'Feed created successfully']);
}

}
