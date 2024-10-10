<?php

namespace App\Http\Controllers;

use App\Models\Avatars;
use App\Models\Avatars_sources;
use App\Models\Avatars_Feed;
use Illuminate\Http\Request;
use App\Models\Language;
use Carbon\Carbon;
use DateTime;
use Auth;

class AvatarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //f

		if(isset($_GET["delfeedfortest"]) && $_GET["delfeedfortest"] == "test1"){
			Avatars_Feed::truncate();
		}

		$avatars =  Avatars::orderBy('created_at', 'desc')
				->take(10)
				->get();



		return view('content.avatars.avatars_list', [
			'avatars' => $avatars
		]);
    }


	

	public function manag_avatars($id = 0){

		$avatars =  Avatars::orderBy('created_at', 'desc')->get();

		if(count($avatars) == 0){
			return redirect()->route('avatars.index')->with('success','No Avatar is there.');
		}

		return view('content.avatars.manag_avatars', [
			'avatars' => $avatars, 'id' => $id
		]);

	}

	public function testavatar(){
		return view('content.avatars.test');
	}

	public function get_avatars($id){
		$avatar =  Avatars::where('_id', $id)->first();
		$avatar->feeds = "13k";
		$avatar->like = "11k";
		$avatar->follower = "12k";
		$avatar->joindate = date("d m Y", strtotime($avatar->created_at));

		$to = \Carbon\Carbon::parse($avatar->created_at);
		$from = \Carbon\Carbon::parse(time());

		$diff = $to->diff($from);

		$years = $diff->y;
		$months = $diff->m;
		$days = $diff->d;

		if($years > 0){
			$avatar->days = $years . " Years - " . $months . " Months - " . $days . " Days";
		}else if($months > 0){
			$avatar->days = $months . " Months - " . $days . " Days";
		}else{
			$avatar->days = $days . " Days";
		}

		$feeds = Avatars_Feed::where('avatar_Id', $avatar->av_Id)->where('online', '!=', 1)->orderby('created_at', 'desc')->take(10)->get();
		$online_feeds = Avatars_Feed::where('avatar_Id', $avatar->av_Id)->where('online', 1)->orderby('online_time', 'desc')->take(10)->get(); 

		$trec = count($feeds);

		$times = array();

		for($i=0; $i<$trec; $i++){
			if($i == 0){
				$times[] = "02:40";
			}else if($i == 1){
				$times[] = "04:0" . rand(1,9);
			}else if($i==3){
				$times[] = "06:0" . rand(1,9);
			}else{
				$times[] = "0". $i + 6 .":3" . rand(1,9);
			}
			
		}

		
		//calculate time for next feed
		$working_days = $avatar->working_days;
		$working_hours = $avatar->working_hours;

		$current_hr = date("H", time());

		$feed_next = "";
		$remainingTime = "";
		$currentDateTime = Carbon::now();

		if($working_days == "Every Day"){
			//feed daily so only call next feed time

			if($working_hours > $current_hr){
				//today next time
				$feed_next = date("d.m.Y - " . $working_hours . ":" . rand(10,59));
				$chktime = date("d.m.Y " . $working_hours . ":" . rand(10,59));
			}else{
				//next day time
				$feed_next = date("d.m.Y - " . $working_hours . ":" . rand(10,59), time() + 86400);
				$chktime = date("d.m.Y " . $working_hours . ":" . rand(10,59), time() + 86400);
			}


			$endDateTime = Carbon::parse(date("d.m.Y H:i", time()));
			$startDateTime = Carbon::parse(date("d.m.Y H:i", strtotime($chktime)));

			// Calculate the time difference in various units
			$diffInMinutes = $startDateTime->diffInMinutes($endDateTime);
			$diffInHours = $startDateTime->diffInHours($endDateTime);
			$diffInDays = $startDateTime->diffInDays($endDateTime);
			$diffHumanReadable = $startDateTime->diffForHumans($endDateTime); // Human readable string
			//if($diffInDays > 0){
			//	$remainingTime = $diffInDays . ":" . $diffInMinutes - ($diffInHours * 60);
			//}else{
				$remainingTime = $diffInHours . ":" . $diffInMinutes - ($diffInHours * 60);
			//}


		}else{
			//feed on specific day so check and find next feed time

			$dbDay = $working_days; // Day column in your database (e.g., 'Monday')
			$dbTime = $working_hours; // Hour column in your database (e.g., '14:30')

			// Convert the 'day' from the database to a Carbon instance
			$targetDayOfWeek = Carbon::parse($dbDay)->dayOfWeek; // Get day of the week index (e.g., 1 for Monday)

			// Create a Carbon instance of the target time on the target day
			$targetDateTime = Carbon::now()->next($targetDayOfWeek)->setTimeFromTimeString($dbTime);

			// If the target time is before the current time, move to the next week
			if ($targetDateTime->lt($currentDateTime)) {
				$targetDateTime->addWeek();
			}

			$feed_next = date("d.m.Y - H:i", strtotime($targetDateTime->toDateTimeString()));

			$remainingTime = $targetDateTime->diffForHumans($currentDateTime, [
				'parts' => 3, // Limit to 3 units (e.g., "2 days 4 hours 30 minutes")
				'short' => true, // Shorten the output (optional)
			]);

			$remainingTime = str_replace("after", "", $remainingTime);

		}


		$avatar->feeds = $feeds;
		$avatar->online_feeds = $online_feeds;
		$avatar->nextime = $feed_next;
		$avatar->remtime = $remainingTime;
		$avatar->times = $times;

		echo json_encode($avatar);
	}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

		$languages = Language::all();


		//$avatar = new Avatars();
		//$avatar->name = 'ali hassan';
		//$avatar->av_Id = 'Ahs_342';
		//$avatar->status = 1;
		//$avatar->save();
		return view('content.avatars.avatars_add', ['languages' => $languages]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

			$imgfilename = "";

          if ($request->hasFile('dp')) {
				$randomize = rand(111111, 999999);
				$extension = $request->file('dp')->extension();
				$filename = $randomize . '.' . $extension;
				$image = $request->file('dp')->move('public/images/', $filename);
				$imgfilename = $filename;
			}







		$name = $request['avatar_name'];
		$avatar_task = $request['avatar_task'];
		$avatar_days = $request['avatar_days'];
		$avatar_hours = $request['avatar_hours'];
		$aricle_per_day = $request['aricle_per_day'];
		$feed_per_hour = $request['feed_per_hour'];
		$sharing_options = $request['sharing_options'];

		$language = $request['select_lang'];
		$translate_lang = $request['translate_lang'];

		$text_comments = 0;
		if(isset($request['text_comments'])){
			$text_comments = 1; //$request['text_comments'];
		}

		$voice_comments = 0;
		if(isset($request['voice_comments'])){
			$voice_comments = 1; //$request['voice_comments'];
		}

		$like_post = 0;
		if(isset($request['like_post'])){
			$like_post = 1; //$request['like_post'];
		}

		$share_post = 0;
		if(isset($request['share_post'])){
			$share_post = 1; //$request['share_post'];
		}

		$text_settings = 0;
		if(isset($request['text_settings'])){
			$text_settings = 1; //$request['text_settings'];
		}
		$text_settings_1 = $request['text_settings_1'];
		$text_settings_2 = $request['text_settings_2'];

		$image_settings = 0;
		if(isset($request['image_settings'])){
			$image_settings = 1; //$request['image_settings'];
		}
		$image_settings_1 = $request['image_settings_1'];
		$image_settings_2 = $request['image_settings_2'];

		$video_settings = 0;
		if(isset($request['video_settings'])){
			$video_settings = 1; //$request['video_settings'];
		}
		$video_settings_1 = $request['video_settings_1'];
		$video_settings_2 = $request['video_settings_2'];


		$source_link = $request['source_link'];


		$avid = "";

		$names = explode(" ", $name);
		if(count($names) > 2){
			$avid = $names[0][0].$names[1][0].$names[2][0];
		}else if(count($names) > 1){
			$avid = $names[0][0].$names[0][1].$names[1][0];
		}else{
			$avid = $names[0][0].$names[0][1].$names[0][2];
		}

		$avid .= "_".rand(111,999);

		$avatar = new Avatars();
		$avatar->name = $name;
		$avatar->av_Id = $avid;
		$avatar->status = 1;
		$avatar->task = $avatar_task;
		$avatar->working_days = $avatar_days;
		$avatar->working_hours = $avatar_hours;
		$avatar->articles_day = $aricle_per_day;
		$avatar->articles_hours = $feed_per_hour;
		$avatar->sharing_option = $sharing_options;
		$avatar->reaction_option_text = $text_comments;
		$avatar->image = $imgfilename;
		$avatar->image_setting = $image_settings;
		$avatar->image_setting_content_type = $image_settings_1;
		$avatar->image_setting_content_type2 = $image_settings_2;
		$avatar->reaction_option_like = $like_post;
		$avatar->reaction_option_post = $share_post;
		$avatar->reaction_option_voice = $voice_comments;
		$avatar->text_setting = $text_settings;
		$avatar->text_setting_content_type = $text_settings_1;
		$avatar->text_setting_content_type2 = $text_settings_2;
		$avatar->video_setting = $video_settings;
		$avatar->video_setting_content_type = $video_settings_1;
		$avatar->video_setting_content_type2 = $video_settings_2;
		$avatar->select_lang = $language;
		$avatar->translate_lang = $translate_lang;


		$avatar->save();

		$avid = $avatar->id;

		foreach($source_link as $link){
			if($link != ""){
				$source = new Avatars_sources();
				$source->avatar_Id = $avid;
				$source->source_link = $link;
				$source->save();
			}

		}

		return redirect()->route('avatars.index')->with('success','Avatar added successfully.');

        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
{
    die("180");
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
		//echo $id;
		$avatar =  Avatars::where('_id', $id)
				->first();


		if($avatar != null){
			$sources = Avatars_sources::where('avatar_Id', $avatar->id)->get();
			$avatar->sources = $sources;
		}

		$languages = Language::all();


		return view('content.avatars.avatars_edit', [
			'avatar' => $avatar, 'languages' => $languages
		]);

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
		$avatar =  Avatars::where('_id', $id)
				->first();

		if($avatar != null){

			if($request['file_removed'] == 1){
				$imgfilename = "";
			}else{
				$imgfilename = $avatar->image;
			}


          if ($request->hasFile('dp')) {
				$randomize = rand(111111, 999999);
				$extension = $request->file('dp')->extension();
				$filename = $randomize . '.' . $extension;
				$image = $request->file('dp')->move('public/images/', $filename);
				$imgfilename = $filename;
			}

		$name = $request['avatar_name'];
		$avatar_task = $request['avatar_task'];
		$avatar_days = $request['avatar_days'];
		$avatar_hours = $request['avatar_hours'];
		$aricle_per_day = $request['aricle_per_day'];
		$feed_per_hour = $request['feed_per_hour'];
		$sharing_options = $request['sharing_options'];

		$language = $request['select_lang'];
		$translate_lang = $request['translate_lang'];

		$text_comments = 0;
		if(isset($request['text_comments'])){
			$text_comments = 1; //$request['text_comments'];
		}

		$voice_comments = 0;
		if(isset($request['voice_comments'])){
			$voice_comments = 1; //$request['voice_comments'];
		}

		$like_post = 0;
		if(isset($request['like_post'])){
			$like_post = 1; //$request['like_post'];
		}

		$share_post = 0;
		if(isset($request['share_post'])){
			$share_post = 1; //$request['share_post'];
		}

		$text_settings = 0;
		if(isset($request['text_settings'])){
			$text_settings = 1; //$request['text_settings'];
		}
		$text_settings_1 = $request['text_settings_1'];
		$text_settings_2 = $request['text_settings_2'];

		$image_settings = 0;
		if(isset($request['image_settings'])){
			$image_settings = 1; //$request['image_settings'];
		}
		$image_settings_1 = $request['image_settings_1'];
		$image_settings_2 = $request['image_settings_2'];

		$video_settings = 0;
		if(isset($request['video_settings'])){
			$video_settings = 1; //$request['video_settings'];
		}
		$video_settings_1 = $request['video_settings_1'];
		$video_settings_2 = $request['video_settings_2'];


		$source_link = $request['source_link'];

		$avatar->name = $name;
		$avatar->task = $avatar_task;
		$avatar->working_days = $avatar_days;
		$avatar->working_hours = $avatar_hours;
		$avatar->articles_day = $aricle_per_day;
		$avatar->articles_hours = $feed_per_hour;
		$avatar->sharing_option = $sharing_options;
		$avatar->reaction_option_text = $text_comments;
		$avatar->image = $imgfilename;
		$avatar->image_setting = $image_settings;
		$avatar->image_setting_content_type = $image_settings_1;
		$avatar->image_setting_content_type2 = $image_settings_2;
		$avatar->reaction_option_like = $like_post;
		$avatar->reaction_option_post = $share_post;
		$avatar->reaction_option_voice = $voice_comments;
		$avatar->text_setting = $text_settings;
		$avatar->text_setting_content_type = $text_settings_1;
		$avatar->text_setting_content_type2 = $text_settings_2;
		$avatar->video_setting = $video_settings;
		$avatar->video_setting_content_type = $video_settings_1;
		$avatar->video_setting_content_type2 = $video_settings_2;

		$avatar->select_lang = $language;
		$avatar->translate_lang = $translate_lang;

		$avatar->update();

		$avid = $avatar->id;

		$sources = Avatars_sources::where('avatar_Id', $avatar->id)->get();
		foreach($sources as $sr){
			$sr->delete();
		}

		foreach($source_link as $link){
			if($link != ""){
				$source = new Avatars_sources();
				$source->avatar_Id = $avid;
				$source->source_link = $link;
				$source->save();
			}
		}


		}

		return redirect()->route('avatars.index')->with('success','Avatar updated successfully.');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Avatars $avatar)
    {
		$avatar->delete();
		return redirect()->route('avatars.index')->with('success','Avatar deleted successfully.');
		//
        //
    }


	public function del_manag_avatars($id){
		//echo $id;

		$avatarfeed = Avatars_Feed::where('_id', $id)->first();

		$avatarid = $avatarfeed->avatar_Id;
		
		$avatar = Avatars::where('av_Id', $avatarid)->first();
		$aid = $avatar->id;

		$avatarfeed->delete();

		return redirect()->route('avatars.manag_avatars', ['id' => $aid])->with('success','Feed deleted successfully.');
	}


	public function update_manag_avatars($id){
		//echo $id;

		$avatarfeed = Avatars_Feed::where('_id', $id)->first();

		$avatarid = $avatarfeed->avatar_Id;
		
		$avatar = Avatars::where('av_Id', $avatarid)->first();
		$aid = $avatar->id;

		$avatarfeed->online = 1;
		$avatarfeed->online_time = date("Y-m-d H:i:s");

		$avatarfeed->update();

		return redirect()->route('avatars.manag_avatars', ['id' => $aid])->with('success','Feed shared successfully.');
	}
}
