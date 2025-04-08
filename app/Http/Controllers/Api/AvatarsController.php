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
	
			// Handle image files
			if ($request->hasFile('images')) {
				foreach ($request->file('images') as $image) {
					$path = $image->store('feeds/images', 'public');
					$imagePaths[] = asset('storage/' . $path);
				}
			}
	
			// Handle image string paths
			$imageStrings = $request->input('images', []);
			if (!is_array($imageStrings)) {
				$imageStrings = [$imageStrings];
			}
			$imagePaths = array_merge($imagePaths, $imageStrings);
	
			// Handle video files
			if ($request->hasFile('videos')) {
				foreach ($request->file('videos') as $video) {
					$path = $video->store('feeds/videos', 'public');
					$videoPaths[] = asset('storage/' . $path);
				}
			}
	
			// Handle video string paths
			$videoStrings = $request->input('videos', []);
			if (!is_array($videoStrings)) {
				$videoStrings = [$videoStrings];
			}
			$videoPaths = array_merge($videoPaths, $videoStrings);
	
			// Handle background image: file or string
			$backgroundImage = null;
			if ($request->hasFile('background_image')) {
				$path = $request->file('background_image')->store('feeds/backgrounds', 'public');
				$backgroundImage = asset('storage/' . $path);
			} elseif ($request->has('background_image') && is_string($request->input('background_image'))) {
				$backgroundImage = $request->input('background_image');
			}
	
			// Create new feed
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
			$feed->text_color = $request->input('text_color');
			$feed->grid_style = $request->input('grid_style');
			$feed->description = $request->input('description');
			$feed->text = $request->input('text');
			$feed->text_properties = $request->input('text_properties');
			$feed->save();
	
			return response()->json([
				'message' => 'Feed stored successfully',
				'data' => $feed
			], 201); // 201 = Created
	
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
