<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StorySong;


class SongController extends Controller
{
    
    public function index()
    {
        $StorySongs  = StorySong::all();
        return view("content.song.index",compact('StorySongs'));
    }

    /**
     * Display a listing of the resource for message ringtone with ringType.
     *
     * @return \Illuminate\Http\Response
     */
    public function getMessage()
    {
        $ringtones = StorySong::where('ringType', 1)->get();
        $ringType = 1;

        return view("content.song.index",compact('ringtones', 'ringType'));
    }
    /**
     * Display a listing of the resource for call ringtone with ringType.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCall()
    {
        $ringtones = StorySong::where('ringType', 2)->get();
        $ringType = 2;
        return view("content.apps.app-ringtone",compact('ringtones', 'ringType'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $response_msg = $request->ringType == "1" ? "Song" : "Song";
        if(!empty($request->audio_paths)){
            foreach ($request->audio_paths as $key => $path) {
                try {
                    $ringtone = StorySong::updateOrCreate(['_id' => $request->id], [
                        'fileName' => $request->audio_filename[$key],
                        'filePath' => $path,
                        'ringType' => intval($request->ringType),
                        'fileSize' => $request->audio_size[$key]
                    ]);
                } catch (\Throwable $e) {
                    return back()->with('success', $response_msg.'  has been created');
                }
            }
            return back()->with('success', $response_msg.'  has been updated');
        } else {
            return redirect()->back();
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $ringtone = StorySong::find($id);
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
