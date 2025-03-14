<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ringtone;

class RingtoneController extends Controller
{
    // Get ringtone

    public function get(){
        $ringtone = Ringtone::get();
        if($ringtone->isEmpty()){
            return response()->json(['success' => false, 'data' => []]);
        }else{
            return response()->json(['success' => true, 'data' => $ringtone]);
        }
    }
        public function store(Request $request)
    {
        $response_msg = $request->ringType == "1" ? "Message" : "Call";
        if(!empty($request->audio_paths)){
            foreach ($request->audio_paths as $key => $path) {
                try {
                    $ringtone = Ringtone::updateOrCreate(['_id' => $request->id], [
                        'fileName' => $request->audio_filename[$key],
                        'filePath' => $path,
                        'ringType' => intval($request->ringType),
                        'fileSize' => $request->audio_size[$key]
                    ]);
                } catch (\Throwable $e) {
                    return back()->with('success', $response_msg.' ringtone has been updated');
                }
            }
            return back()->with('success', $response_msg.' ringtone has been updated');
        } else {
            return redirect()->back();
        }

    }

    public function getMessageRingtones()
    {
        $ringtones = Ringtone::where('ringType', 1)->get()->map(function ($ringtone) {
            return [
                '_id' => $ringtone->_id,
                'fileName' => $ringtone->fileName,
                // Generates full URL using 'storage/' base path
                'filePath' => url('public/storage/' . $ringtone->filePath), // Ensure full URL for ringtone
                'ringType' => $ringtone->ringType,
                'fileSize' => $ringtone->fileSize,
                'updated_at' => $ringtone->updated_at,
                'created_at' => $ringtone->created_at,
            ];
        });
    
        return response()->json([
            'status' => true,
            'message' => 'Message ringtones retrieved successfully',
            'data' => $ringtones
        ], 200);
    }

    public function getCallRingtones()
    {
        $ringtones = Ringtone::where('ringType', 2)->get()->map(function ($ringtone) {
            return [
                '_id' => $ringtone->_id,
                'fileName' => $ringtone->fileName,
                // Generates full URL using 'storage/' base path
                'filePath' => url('public/storage/' . $ringtone->filePath), // Ensure full URL for ringtone
                'ringType' => $ringtone->ringType,
                'fileSize' => $ringtone->fileSize,
                'updated_at' => $ringtone->updated_at,
                'created_at' => $ringtone->created_at,
            ];
        });
    
        return response()->json([
            'status' => true,
            'message' => 'Call ringtones retrieved successfully',
            'data' => $ringtones
        ], 200);
    }





 











    public function destroy($id)
{
    try {
        $ringtone = Ringtone::find($id);

        if (!$ringtone) {
            return response()->json([
                'success' => false,
                'message' => 'Ringtone not found.'
            ], 404);
        }

        $ringtone->delete();

        return response()->json([
            'success' => true,
            'message' => 'Ringtone has been deleted.'
        ], 200);

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Failed to delete ringtone.',
            'error' => $e->getMessage(),
        ], 500);
    }
}

}
