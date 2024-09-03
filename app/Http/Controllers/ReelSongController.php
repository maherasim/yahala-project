<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RealSong;
use App\Models\ReelStoryTime;
use App\Models\Cards;
use App\Models\ReelCard;
use App\Models\ReelDeletionCards;
use App\Models\RealReason;


class ReelSongController extends Controller
{
    public function index()
    {
        $StorySongs  = RealSong::all();
        return view("content.reelsong.index",compact('StorySongs'));
    }
    public function ManageStories(){
        $cards=ReelCard::get();
       return view('content.stories.managereels',compact('cards'));
    }
    public function deleteCard(Request $request, $id)
    {
        //dd($request->all()); 
        $card = ReelCard::find($id);

        if (!$card) {
            return redirect()->back()->with('error', 'Card not found.');
        }
    
        // Fetch the reason from the request
        $reasonId = $request->input('reason');
        $reasonTitle = $request->input('reason_title');
        $reason_description = $request->input('reason_description');
    
        $reason = RealReason::find($reasonId);
    
        if (!$reason) {
            return redirect()->back()->with('error', 'Reason not found.');
        }
    
        // Store the deletion log with reason and additional details
        ReelDeletionCards::create([
            'card_id' => $id,
            'reason_id' => $reasonId,
            'reason_title' => $reasonTitle, // Store reason title
            'reason_description' => $reason_description,   // Store reason text
        ]);
    
        // Delete the card
        $card->delete();
    
        return redirect()->back()->with('success', 'Card deleted successfully.');
    }
    public function ReportedStories(){
        $cards=Cards::get();
        return view('content.reels.ReportedStories',compact('cards'));
     }
    public function getMessage()
    {
        $ringtones = RealSong::where('ringType', 1)->get();
        $ringType = 1;

        return view("content.reelsong.index",compact('ringtones', 'ringType'));
    }
    public function getCall()
    {
        $ringtones = RealSong::where('ringType', 2)->get();
        $ringType = 2;
        return view("content.apps.app-ringtone",compact('ringtones', 'ringType'));
    }
    public function storage_setting(){
        $storyTime = ReelStoryTime::first(); 
        return view('content.stories.reelstorytime',compact('storyTime'));
   }
   public function storestory(Request $request)
   {
       //dd($request->all());
       $validated = $request->validate([
           'length' => 'nullable|string|min:0|max:100',
           'is_active' => 'nullable|string',
       ]);
//dd( $validated);
       $storyTime = ReelStoryTime::first(); // Assuming there's only one record
       if ($storyTime) {
           $storyTime->update($validated);
       } else {
        ReelStoryTime::create($validated);
       }
//dd($storyTime);
       return redirect()->back()->with('success', 'Reel Time updated successfully!');
   }
    public function store(Request $request)
    {
        $response_msg = $request->ringType == "1" ? "Song" : "Song";
    
        if (!empty($request->audio_paths)) {
            try {
                foreach ($request->audio_paths as $key => $path) {
                    RealSong::updateOrCreate(['_id' => $request->id], [
                        'fileName' => $request->audio_filename[$key],
                        'filePath' => $path,
                        'ringType' => intval($request->ringType),
                        'fileSize' => $request->audio_size[$key]
                    ]);
                }
    
                // Success message after all items are processed
                return redirect()->route('reels.song')->with('success', $response_msg . ' has been updated');
            } catch (\Throwable $e) {
                // Handle the exception (log the error, etc.)
                // For now, redirect back with an error message
                return redirect()->route('reels.song')->with('error', 'There was an error processing your request.');
            }
        } else {
            // Redirect to the route if no audio_paths are present
            return redirect()->route('reels.song')->with('warning', 'No audio paths were provided.');
        }
    }
    
    public function destroy($id)
    {
        try {
            $ringtone = RealSong::find($id);
            if (!$ringtone) {
                return back()->with('error','Song not found.');
            }
            $ringtone->delete();
            return back()->with('success','Song has been deleted.');

        } catch (\Exception $e) {
            return back()->with('error','Failed to delete Song.');
        }
    }
}
