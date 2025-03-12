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
		try {
			$feed = new AvatarsFeeds();
			$feed->user_type = $request->user_type;
			$feed->feed_type = $request->feed_type;
			$feed->background_image = $request->background_image;
			$feed->text_color = $request->text_color;
			$feed->grid_style = $request->grid_style;
			$feed->description = $request->description;
			$feed->text = $request->text;
			$feed->text_properties = $request->text_properties;
			$feed->save();
	
			return response()->json([
				'success' => true,
				'message' => 'Feed created successfully.',
				'data' => $feed
			], 201);
		} catch (\Exception $e) {
			return response()->json([
				'success' => false,
				'message' => 'Error creating feed',
				'error' => $e->getMessage(),
				'file' => $e->getFile(),
				'line' => $e->getLine()
			], 500);
		}
	}
	

	public function asimpostfeed(Request $request) 
	{
		$data = $request->only([
			'avatar', 'title', 'content', 'user_type', 'feed_type', 
			'background_image', 'text_color', 'grid_style', 'description', 
			'text', 'text_properties'
		]);
	
		$data['image'] = (array) $request->input('images', []);
		$data['videos'] = (array) $request->input('videos', []);
		$data['forwards'] = 0;
		$data['comments'] = [];
		$data['likes'] = 0;
	
		$feed = AvatarsFeeds::create($data);
	
		return response()->json(['message' => 'Feed stored successfully', 'data' => $feed], 201);
	}
	
	
	

    
    
}
