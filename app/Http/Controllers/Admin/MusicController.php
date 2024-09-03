<?php

namespace App\Http\Controllers\Admin;

use App\Models\Music;
use App\Models\Artist;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\MusicCategory;
use App\Models\Country;
use App\Models\VideoClip;
use App\Models\Song;
use App\Http\Controllers\Controller;
use FFMpeg;
use App\Http\Requests\StoreSongRequest;
use App\Http\Controllers\Admin\FileController;
use Carbon\Carbon;
// use Illuminate\Support\Facades\Storage;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // phpinfo();
        // exit();

        $type  = $request->segments()[0];
        $music  = Music::where('type', $type)->with('music_category')
            ->whereHas('music_category')->with('songs')->get();
        $totalSongsSize = 0;

        $music->each(function ($musicItem) use (&$totalSongsSize) {
            // Extract the size values using pluck
            $sizeValues = $musicItem->songs->pluck('file_size')->flatten();
            // Calculate the total size using sum
            $totalSize = $sizeValues->sum();

            // Add the total size to the music item
            $musicItem->total_size = $totalSize;
            $totalSongsSize += $totalSize;
            $timeValues = $musicItem->songs->pluck('length')->toArray();

            // Calculate the total time in seconds using sum
            $totalTimeInSeconds = array_reduce($timeValues, function ($carry, $time) {
                [$minutes, $seconds] = explode(':', $time);
                return $carry + $minutes * 60 + $seconds;
            }, 0);

            // Calculate hours, minutes, and seconds
            $hours = floor($totalTimeInSeconds / 3600);
            $minutes = floor(($totalTimeInSeconds % 3600) / 60);
            $seconds = $totalTimeInSeconds % 60;

            // Format the total time as "2h 30min 45sec"
            $formattedTime = '';
            if ($hours > 0) {
                $formattedTime .= $hours . 'h ';
            }
            if ($minutes > 0) {
                $formattedTime .= $minutes . 'min ';
            }
            $formattedTime .= $seconds . 'sec';

            // Add the formatted total time to the music item
            $musicItem->total_time_formatted = $formattedTime;
        });
        $music_category  = MusicCategory::doesntHave('musics')->get();
        $artists = Artist::get();
        $albums = Album::get();
        return view('content.music.index', compact('music', 'music_category', 'artists', 'type', 'albums', 'totalSongsSize'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //     return view('content.music.create' , compact('music_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type  = $request->segments()[0];
        $request->validate([
            'category_id' => 'required',
        ]);

        //   $music_implode = implode('' , $request->audio_paths);
        try {
            // foreach ($request->audio_paths as $audioPath) {
            $music = new Music();
            $music->category_id = $request->category_id;
            // $music->artist_id = $request->artist_id;
            // $music->audio = $audioPath;
            $music->status = $request->status;
            $music->type = $request->type;
            $music->save();
            // }

            return redirect()->back()->with('success', $type . ' Has been inserted');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to add ' . $type);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(Music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $music = Music::findorFail($id);
        $music_category = MusicCategory::get();
        return view('content.music.edit', compact('music_category', 'music'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $music = Music::findorFail($id);
        $music->name = $request->title;
        $music->category_id = $request->category_id;
        $music->artist_id = $request->artist_id;
        // $music->audio = $request->audio_paths ?? [];
        $music->status = $request->status;
        if ($music->update()) {
            return redirect()->back()->with('success', 'Music Has been Updated');
        } else {
            return redirect()->back()->with('success', 'Music not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $music = Music::findorFail($id);
        if ($music->audio) {
            foreach ($music->audio as $audio_file) {
                $image_path = public_path('storage/' . $audio_file);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }
        }

        if ($music->delete($music->id)) {
            return redirect()->route('music.index')->with('success', 'Music  Has been Deleted');
        } else {
            return redirect()->route('music.index')->with('success', 'Music not Deleted');
        }
    }
    public function status($id, $status)
    {
        $music = Music::find($id);

        $music->status = $status;
        if ($music->update()) {
            return redirect()->route('music.index')->with('success', 'Status Has been Updated');
        } else {
            return redirect()->route('music.index')->with('error', 'Status is not changed');
        }
    }

    public function deleteMusic(Request $request, $id)
    {
        $music = Music::find($id);
        $music->image = array_filter($music->audio, function ($path) use ($request) {
            return !($path === $request->path);
        });
        $music->save();
        unlink(public_path('storage/' . $request->path));
        return [
            'status' => true
        ];
    }

    public function pricing()
    {
        return view('content.music.pricing');
    }

    public function video($music_id)
    {
        // $songs = VideoClip::where('music_id',$music_id)->get();
        // $music_category  = MusicCategory::get();
        // $artists = Artist::get();
        // return view('content.video_clips.view', compact('songs', 'music_category', 'artists'));
        $songs = Song::where('music_id', $music_id)
            ->whereHas('music', function ($q) {
                $q->whereHas('music_category');
            })->get();
        $songs->transform(function ($song) {
            $formattedDate = Carbon::parse($song->created_at)->format('j M Y');
            $song->upload_date = str_replace([' 0', '-0'], [' ', '-'], $formattedDate);
            return $song;
        });

        $music = Music::find($music_id);
        $music_category  = MusicCategory::get();
        $artists = Artist::get();
        $albums = Album::get();
        return view('content.video_clips.view', compact('songs', 'music', 'music_category', 'artists', 'albums'));
    }

    public function store_song(Request $request)
    {
        try {
            foreach ($request->songs as $key => $audioPath) {
                $song = new Song();
                $song->name = $request->songs_file_name[$key] ?? '';
                $song->music_id = $request->music_id;
                $song->album_id = $request->album_id;
                $song->artist_id = $request->artist_id;
                $song->audio = $audioPath;
                $song->file_size = $request->songs_file_size[$key] ?? '';
                $song->length = $request->songs_file_length[$key] ?? '';
                $song->status = (int)$request->status;
                $song->save();
            }
            return back()->with("success", "Song successfully added.");
        } catch (\Exception $e) {
            return back()->with("error", "Failed to add Song ");
        }
    }

    public function deleteSong($id)
    {
        $music = Song::find($id);
        if ($music->audio) {
            $file_path = public_path('storage/' . $music->audio);
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
        $music->delete();
        return back()->with("success", "Song successfully deleted.");
    }

    public function country()
    {
        $countries = Country::orderBy("name", "ASC")->get();
        return view('content.music.country', compact('countries'));
    }

    public function changeCategory(Request $request)
    {
        $music = Music::find($request->music_id);
        $music->category_id = $request->changeCategory;
        $music->save();
        return back()->with("success", "Category Saved Successfully!");
    }
}
