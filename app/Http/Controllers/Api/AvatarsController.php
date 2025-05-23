<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Avatars;
use App\Models\Avatars_sources;
use App\Models\AvatarsFeeds;
use Illuminate\Http\Request;
use App\Models\Language;
use DateTime;
use Auth;
use Carbon\Carbon;

class AvatarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
	
	

	 
 
	 public function getFeeds()
	 {
		 $nationalities = Nationality::all()->map(function($nationality) {
			 // Use the `storage_path` helper to create the correct URL
			 $nationality->thumbnail_path = asset('storage/' . $nationality->thumbnail_path); // Ensure correct path
			 return $nationality;
		 });
	 
		 return response()->json([
			 'success' => true,
			 'message' => 'Nationalities retrieved successfully.',
			 'data' => $nationalities,
		 ]);
	 }
	 public function getbgfeed()
	 {
		 $nationalities = Nationality::all()->map(function($nationality) {
			 // Use the `storage_path` helper to create the correct URL
			 $nationality->thumbnail_path = asset('storage/' . $nationality->thumbnail_path); // Ensure correct path
			 return $nationality;
		 });
	 
		 return response()->json([
			 'success' => true,
			 'message' => 'Nationalities retrieved successfully.',
			 'data' => $nationalities,
		 ]);
	 }
	 
	

   
    /**
     * Store a newly created resource in storage.
     */
    public function postfeed(Request $request)
    {
		
		$av_id = $request['avatar'];
		$title = $request['title'];
		$image = $request['image_path'];
		$content = $request['content'];
		
		$feed = new AvatarsFeeds();
		$feed->avatar_Id = $av_id;
		$feed->title = $title;
		$feed->image = $image;
		$feed->content = $content;
		$feed->forwards = 0;
		$feed->online = 0;
		
		$feed->comments = 0;
		$feed->likes = 0;
		$feed->save();
		
		return response()->json(['message' => 'Ok'],201);
		
        //
    }
	public function asimpostfeed(Request $request)
	{
		try {
			\Log::info('Received Data:', $request->all());
	
			$imagePaths = [];
			$videoPaths = [];
	
			// Handle multiple image uploads
			if ($request->hasFile('images')) {
				foreach ($request->file('images') as $image) {
					if ($image->isValid()) {
						$path = $image->store('feeds/images', 'public');
						$imagePaths[] = asset('storage/' . $path);
					}
				}
			}
	
			// Handle multiple video uploads
			if ($request->hasFile('videos')) {
				foreach ($request->file('videos') as $video) {
					if ($video->isValid()) {
						$path = $video->store('feeds/videos', 'public');
						$videoPaths[] = asset('storage/' . $path);
					}
				}
			}
	
			// Handle background image (file or valid string)
			$backgroundImage = null;
			if ($request->hasFile('background_image')) {
				$path = $request->file('background_image')->store('feeds/backgrounds', 'public');
				$backgroundImage = asset('storage/' . $path);
			} elseif ($request->filled('background_image')) {
				$backgroundImage = $request->input('background_image');
			}
	
			// Handle background video
			$backgroundVideo = null;
			if ($request->hasFile('background_video')) {
				$video = $request->file('background_video');
				if ($video->isValid()) {
					$path = $video->store('feeds/background_videos', 'public');
					$backgroundVideo = asset('storage/' . $path);
				}
			}
	
			// Create and save new feed
			$feed = new AvatarsFeeds();
			$feed->avatar_Id = $request->input('avatar');
			$feed->user_Id = $request->input('user_Id');
			$feed->title = $request->input('title');
			$feed->image = $imagePaths;
			$feed->content = $request->input('content');
			$feed->textemoji = $request->input('textemoji');
			$feed->forwards = 0;
			$feed->comments = [];
			$feed->likes = 0;
			$feed->videos = $videoPaths;
			$feed->textSize = $request->input('textSize');
			$feed->shareType = $request->input('shareType');
			$feed->user_type = $request->input('user_type');
			$feed->feed_type = $request->input('feed_type');
			$feed->background_image = $backgroundImage;
			$feed->background_video = $backgroundVideo; // ✅ new field added
			$feed->text_color = $request->input('text_color');
			$feed->grid_style = $request->input('grid_style');
			$feed->description = $request->input('description');
			$feed->text = $request->input('text');
			$feed->text_properties = $request->input('text_properties');
			$feed->save();
	
			return response()->json([
				'message' => 'Feed stored successfully',
				'data' => $feed
			], 201);
	
		} catch (\Exception $e) {
			return response()->json([
				'message' => 'Error saving feed',
				'error' => $e->getMessage(),
				'file' => $e->getFile(),
				'line' => $e->getLine()
			], 500);
		}
	}
	
	
	

    
    
}
