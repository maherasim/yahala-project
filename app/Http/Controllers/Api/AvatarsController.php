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
		 try {
			 $avatars = Avatars_Feed::all();
	 dd( 'asim'	);
			 return response()->json([
				 'message' => 'Ok',
				 'data' => $avatars
			 ], 200);
		 } catch (\Exception $e) {
			 Log::error('Error fetching feeds: ' . $e->getMessage(), [
				 'file' => $e->getFile(),
				 'line' => $e->getLine()
			 ]);
	 
			 return response()->json([
				 'message' => 'Error',
				 'error' => $e->getMessage(),
				 'file' => $e->getFile(),
				 'line' => $e->getLine()
			 ], 500);
		 }
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
