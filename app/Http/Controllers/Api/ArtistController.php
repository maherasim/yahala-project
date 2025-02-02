<?php

namespace App\Http\Controllers\Api;

use App\Models\Artist;
use App\Models\Album;
use App\Models\Song;
use App\Models\VideoClip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistController extends Controller
{
    public function get_all_artist_music()
    {

        $artist = Artist::select('id', 'first_name', 'last_name')->withCount('musics')->get();

        if ($artist->isEmpty()) {
            return response()->json(['success' => false, 'data' => []]);
        } else {
            return response()->json(['success' => true, 'data' => $artist]);
        }
    }

    public function index()
    {
        $artists = Artist::with('musics')->get();  
    
        foreach ($artists as $artist) {
            // Ensure image URL is properly formatted
            $artist->image = $artist->image ? url('storage/' . $artist->image) : null;
    
            // Format music data with full song URLs (if needed)
            foreach ($artist->musics as $music) {
                $music->file_url = $music->file ? url('storage/' . $music->file) : null;
            }
        }
    
        return response()->json([
            'success' => true,
            'message' => 'Artists with music retrieved successfully.',
            'data' => $artists
        ], 200);
    }
    

    public function get_music_by_artist($id)
    {
        $songs = Song::where('artist_id', $id)->get();
        foreach ($songs as $song) {
            $song->audio = url('storage/' .  $song->audio);
        }
        if ($songs->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'No songs found for this artist.',
                'data' => []
            ], 404);
        }
    
        return response()->json([
            'success' => true,
            'message' => 'Songs retrieved successfully.',
            'data' => $songs
        ], 200);
    }
    
    public function get_video_by_artist($id)
    {
        $songs = VideoClip::where('artist_id', $id)->get();
        foreach ($songs as $song) {
            $song->video = url('storage/' .  $song->video);
        }
        if ($songs->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'No songs found for this artist.',
                'data' => []
            ], 404);
        }
    
        return response()->json([
            'success' => true,
            'message' => 'Songs retrieved successfully.',
            'data' => $songs
        ], 200);
    }
    

    public function get_single_artist_music($id)
    {
        $artist = Artist::select('id', 'image', 'first_name', 'last_name', 'province_id')->where('id', $id)->with('musics', 'province.country')->first();
        if (is_null($artist)) {
            return response()->json(['success' => false, 'data' => []]);
        } else {
            return response()->json(['success' => true, 'data' => $artist]);
        }
    }

    public function get_two_latest_artist()
    {
        $artist = Artist::withCount('musics')->with('province.country')->latest()->limit(2)->get();
        if ($artist->isEmpty()) {
            return response()->json(['success' => false, 'data' => []]);
        } else {
            $modifiedData = $artist->map(function ($data) {
                return [
                    'id' => $data->id,
                    'first_name' => $data->first_name,
                    'image' => $data->image,
                    'musics_count' => $data->musics_count,
                    'album_count' => Album::where('artist_id', $data->id)->count() ?? 0,
                    'province' => [
                        'id' => $data->province->id,
                        'name' => $data->province->name,
                        'country' => [
                            'id' => $data->province->country->id,
                            'name' => $data->province->country->name,
                        ],
                    ],
                ];
            });
            return response()->json(['success' => true, 'data' => $modifiedData]);
        }
    }
}
