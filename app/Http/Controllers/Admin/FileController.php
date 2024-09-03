<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        // dd($request);

        if (!$request->hasFile('file')) {
            return response('', 400);
        }

        // $path = $request->file->store("/" . $request->folder?? 'files', "public");

        // Get the uploaded file from the request
        $uploadedFile = $request->file('file');

        // Generate a unique name for the file, or use the original file name
        $uniqueName = uniqid() . '___' . str_replace(' ', '_', $uploadedFile->getClientOriginalName());

        // Get the folder name from the request or use 'files' as the default folder
        $folder = $request->folder ?? 'files';

        // Store the file in the 'public' disk (configured in config/filesystems.php)
        $filePath = $uploadedFile->storeAs("/{$folder}", $uniqueName, "public");

        // $filtered_path = url('/') . '/storage/' .  $filePath;

        try {
            $audio = new \wapmorgan\Mp3Info\Mp3Info($request->file('file'), true);
            $durationInSeconds = $audio->duration;
        } catch (\Exception $e) {
            $durationInSeconds = '';
        }

        if($durationInSeconds !== ''){
            // Format duration in minutes:seconds
            $formattedDuration = Helpers::formatDuration($durationInSeconds);
        }

        return [
            'status' => true,
            'path' => $filePath,
            'duration' => $formattedDuration ?? '',
        ];
    }

    public function delete(Request $request)
    {
        if (!$request->path) {
            return response('', 400);
        }
        unlink(public_path('storage/' . $request->path));
        if (Storage::delete($request->path)) {
            return [
                'status' => true
            ];
        } else {
            return [
                'status' => false
            ];
        }
    }

    public function upload_bg(Request $request)
    {
        $imagePath = $request->file('file')->store('public/images');
        $filtered_path = url('/') . '/storage/' . explode('/', $imagePath, 2)[1];
        return [
            'status' => true,
            'path' => $filtered_path
        ];
    }
}
