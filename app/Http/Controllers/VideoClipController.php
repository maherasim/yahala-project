<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use FFMpeg\Coordinate\TimeCode;
use FFMpeg\FFMpeg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    public function manage_video(){
        $videos = Video::all();
        return view('content.report_video.manage_video',compact('videos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);
        // dd($request->all());
        $video = Video::findOrNew($request->video_id);
        $video->title  = $request->title;
        $video->user_id = auth()->user()->id;

        if (!empty($request->thumbnail)) {
            if ($request->has('video_paths')) {
                foreach ($request->video_paths as $key => $videoPath) {
                    $videos[] = [
                        'path' => $videoPath,
                        'name' => $request->video_name[$key] ?? '',
                        'duration' => $request->video_durations[$key] ?? '',
                        'size' => $request->video_sizes[$key] ?? '',
                    ];
                }
                $video->video = $videos;
                $cleanedThumbnail = Str::after($request->thumbnail, 'storage/');
                $cleanedThumbnail = Str::before($cleanedThumbnail, '.jpg') . '.jpg';
                $video->thumbnail = $cleanedThumbnail;
            }
        }

        if ($video->save()) {
            return redirect()->route('manage_video')->with('success', 'Video Has been inserted');
        } else {
            return redirect()->route('manage_video')->with('error', 'Failed to add Video');
        }
    }

    public function destroy($id)
    {
        $video = Video::find($id);
        if (isset($video->images)) {
            foreach ($video->images as $video_file) {
                $image_path = 'public/' . $video_file['path']; // Relative path in storage
                // ✅ Check using Storage::exists()
                if (Storage::exists($image_path)) {
                    Storage::delete($image_path); // ✅ Delete the file properly
                }
            }
        }
        if (isset($video->video)) {
            foreach ($video->video as $video_file) {
                $image_path = 'public/' . $video_file['path']; // Relative path in storage
                if (Storage::exists($image_path)) {
                    Storage::delete($image_path); // ✅ Delete the file properly
                }
            }
        }
        if ($video->delete($video->id)) {
            return redirect()->route('manage_video')->with('success', 'Video Has been Deleted');
        } else {
            return redirect()->route('manage_video')->with('error', 'Failed to delete Video');
        }
    }

    private function getMediaDuration($file)
    {
        // Initialize FFMpeg
        $ffmpeg = FFMpeg::create();
        // Open the media file (you need to get the real path of the uploaded file)
        $media = $ffmpeg->open($file->getRealPath());
        // Get the format of the file to retrieve metadata, including the duration
        $format = $media->getFormat();
        // Get duration in seconds (or any other format you want)
        $duration = $format->get('duration'); // Duration is in seconds

        return $duration;
    }

    public function generateThumbnail(Request $request)
    {
        $thumbnail = $this->generateThumbnailFromPath($request->video_path, $request->duration);
        return response()->json(['thumbnail' => $thumbnail], 200);
    }

    private function generateThumbnailFromPath($videoPath, $duration)
    {
        // Initialize FFMpeg
        $ffmpeg = FFMpeg::create();
        $fullPath = Storage::path('public/' . $videoPath);

        // Get 3 timestamps (25%, 50%, 75% of the duration)
        $timestamps = [
            round($duration * 0.25),
            round($duration * 0.40),
            round($duration * 0.75),
        ];

        $thumbnails = [];

        foreach ($timestamps as $index => $time) {
            // Generate unique thumbnail name
            $thumbnailPath = 'history/' . pathinfo($videoPath, PATHINFO_FILENAME) . "_thumb_{$index}.jpg";

            // Delete if already exists
            if (Storage::exists($thumbnailPath)) {
                Storage::delete($thumbnailPath);
            }

            // Open the video and capture frame
            $video = $ffmpeg->open($fullPath);
            $frame = $video->frame(TimeCode::fromSeconds($time));
            $frame->save(storage_path('app/public/' . $thumbnailPath));

            // Add to response array
            $thumbnails[] = asset('storage/' . $thumbnailPath);
        }
        return $thumbnails;
    }
}
