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
			// Log received data
			\Log::info('Received Data:', $request->all());
	
			// Convert `images` and `videos` to arrays if needed
			$image = $request->input('images', []);
			if (!is_array($image)) {
				$image = [$image];
			}
	
			$videos = $request->input('videos', []);
			if (!is_array($videos)) {
				$videos = [$videos];
			}
	
			// Create new feed
			$feed = new AvatarsFeeds();
			$feed->avatar_Id = $request->input('avatar');
			$feed->title = $request->input('title');
			$feed->image = $image;
			$feed->content = $request->input('content');
			$feed->forwards = 0;
			$feed->comments = [];
			$feed->likes = 0;
			$feed->videos = $videos;
			$feed->user_type = $request->input('user_type');
			$feed->feed_type = $request->input('feed_type');
			$feed->background_image = $request->input('background_image');
			$feed->text_color = $request->input('text_color');
			$feed->grid_style = $request->input('grid_style');
			$feed->description = $request->input('description');
			$feed->text = $request->input('text');
			$feed->text_properties = $request->input('text_properties');
			$feed->save();
	
			return response()->json(['message' => 'Feed stored successfully', 'data' => $feed], 201);
		} catch (\Exception $e) {
			return response()->json([
				'message' => 'Error saving feed',
				'error' => $e->getMessage()
			], 500);
		}
	}
	
	

    
    
}
