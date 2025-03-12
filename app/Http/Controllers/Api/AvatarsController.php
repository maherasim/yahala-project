<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Avatars;
use App\Models\Avatars_sources;
use App\Models\Avatars_Feed;
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
		
		$feed = new Avatars_Feed();
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




    
    
}
