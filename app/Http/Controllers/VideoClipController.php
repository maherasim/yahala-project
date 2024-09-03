<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\VideoClip;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\MusicCategory;
use Carbon\Carbon;

class VideoClipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $video  = VideoClip::with('music_category')->get();
        $music_category  = MusicCategory::get();
        $artists = Artist::get();
        $albums = Album::get();

        return view('content.video_clips.index', compact('video', 'music_category', 'artists', 'albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //     return view('content.video_clips.create' , compact('music_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->dd();
        $validated = $request->validate([
            'video_file_name' => 'required',
            'artist_id' => 'required',
            'video' => 'nullable',
            'thumbnail' => 'nullable',
            'video_file_size' => 'nullable',
            'video_file_length' => 'nullable',
            'status' => 'required',
        ]);

        try {
            VideoClip::create($validated);
            return redirect()->back()->with('success', 'Video clip Has been added');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to add video clip');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(VideoClip $music)
    {
        // dd("ok");
        $artists = Artist::get();
        $content_type = 'video-clip';
        // dd($artists);
        return view('content.video_clips.video-clip-detail', compact('content_type', 'artists'));
        //
    }

    public function detail($music_id)
    {
        $video_clips = VideoClip::get();
        $video_clips->transform(function ($video_clip) {
            $formattedDate = Carbon::parse($video_clip->created_at)->format('j M Y');
            $video_clip->upload_date = str_replace([' 0', '-0'], [' ', '-'], $formattedDate);
            return $video_clip;
        });
        $music_category  = MusicCategory::get();
        $artists = Artist::get();
        $albums = Album::get();
        // dd($artists);
        // $artists = [];
        return view('content.video_clips.video-clip-detail', compact('video_clips', 'music_category', 'artists', 'albums'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = VideoClip::findorFail($id);
        $music_category = MusicCategory::get();
        return view('content.video_clips.edit', compact('music_category', 'video'));
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

        $video = VideoClip::findorFail($id);
        $video->name = $request->title;
        $video->category_id = $request->category_id;
        $video->artist_id = $request->artist_id;
        $video->video = $request->video_paths ?? [];
        $video->status = $request->status;
        if ($video->update()) {
            return redirect()->back()->with('success', 'Video Has been Updated');
        } else {
            return redirect()->back()->with('success', 'Video not updated');
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
        $video = VideoClip::findorFail($id);
        // if($video->audio){
        //     foreach($video->video as $video_file){
        //         $image_path = public_path('storage/'.$video_file);
        //         if(file_exists($image_path)){
        //             unlink($image_path);
        //         }
        //     }
        // }

        if ($video->video) {
            $file_path = public_path('storage/' . $video->video);
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }


        if ($video->thumbnail) {
            $file_path = public_path('storage/' . $video->thumbnail);
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }

        if ($video->delete($video->id)) {
            //    return redirect()->route('video-clips.index')->with('success', 'Video  Has been Deleted');
            return redirect()->back()->with('success', 'Video  Has been Deleted');
        } else {
            //    return redirect()->route('video-clips.index')->with('error', 'Video not Deleted');
            return redirect()->back()->with('error', 'Video not Deleted');
        }
    }
    public function status($id, $status)
    {
        $video = VideoClip::find($id);

        $video->status = $status;
        if ($video->update()) {
            return redirect()->route('video-clips.index')->with('success', 'Status Has been Updated');
        } else {
            return redirect()->route('video-clips.index')->with('error', 'Status is not changed');
        }
    }

    public function deleteVideo(Request $request, $id)
    {
        $video = VideoClip::find($id);
        $video->video = array_filter($video->video, function ($path) use ($request) {
            return !($path === $request->path);
        });
        $video->save();
        unlink(public_path('storage/' . $request->path));
        return [
            'status' => true
        ];
    }
}
