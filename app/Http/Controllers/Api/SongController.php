<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StorySong;
use Illuminate\Support\Facades\Log;

class SongController extends Controller
{
    public function index()
    {
        try {
            $storySongs = StorySong::all();
            return response()->json(['status' => true, 'data' => $storySongs], 200);
        } catch (\Exception $e) {
            Log::error('Error fetching songs: ' . $e->getMessage());
            return response()->json(['status' => false, 'message' => 'Failed to fetch songs'], 500);
        }
    }

    /**
     * Display a listing of the resource for message ringtone with ringType.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMessage()
    {
        try {
            $ringtones = StorySong::where('ringType', 1)->get();
            return response()->json(['status' => true, 'data' => $ringtones], 200);
        } catch (\Exception $e) {
            Log::error('Error fetching message ringtones: ' . $e->getMessage());
            return response()->json(['status' => false, 'message' => 'Failed to fetch message ringtones'], 500);
        }
    }

    /**
     * Display a listing of the resource for call ringtone with ringType.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCall()
    {
        try {
            $ringtones = StorySong::where('ringType', 2)->get();
            return response()->json(['status' => true, 'data' => $ringtones], 200);
        } catch (\Exception $e) {
            Log::error('Error fetching call ringtones: ' . $e->getMessage());
            return response()->json(['status' => false, 'message' => 'Failed to fetch call ringtones'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $response_msg = $request->ringType == "1" ? "Song" : "Song";

        if (!empty($request->audio_paths)) {
            foreach ($request->audio_paths as $key => $path) {
                try {
                    $ringtone = StorySong::updateOrCreate(['_id' => $request->id], [
                        'fileName' => $request->audio_filename[$key],
                        'filePath' => $path,
                        'ringType' => intval($request->ringType),
                        'fileSize' => $request->audio_size[$key]
                    ]);
                } catch (\Throwable $e) {
                    Log::error('Error creating/updating song: ' . $e->getMessage());
                    return response()->json(['status' => false, 'message' => $response_msg . ' creation failed'], 500);
                }
            }
            return response()->json(['status' => true, 'message' => $response_msg . ' has been updated'], 200);
        } else {
            return response()->json(['status' => false, 'message' => 'No audio paths provided'], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // Implement your update logic and return JSON response
        // This is currently empty and should be filled in as per your needs.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $ringtone = StorySong::find($id);
            if (!$ringtone) {
                return response()->json(['status' => false, 'message' => 'Song not found'], 404);
            }
            $ringtone->delete();
            return response()->json(['status' => true, 'message' => 'Song has been deleted'], 200);
        } catch (\Exception $e) {
            Log::error('Error deleting song: ' . $e->getMessage());
            return response()->json(['status' => false, 'message' => 'Failed to delete song'], 500);
        }
    }
}
