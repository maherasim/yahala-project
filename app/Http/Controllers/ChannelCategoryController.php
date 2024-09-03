<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Channel;
use App\Models\ChannelSubcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ChannelCategoryController extends Controller
{
    public function add_channel_category(Request $request) {
        /* Handle the file upload */
        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
    
            /* Check if file is valid */
            if ($file->isValid()) {
                $originalFileName = $file->getClientOriginalName(); 
                $filePath = $file->storeAs('channel-banners', $originalFileName, 'public'); 
    
                $fileUrl = Storage::url($filePath);
            } else {
                return back()->with('error', 'Uploaded file is not valid');
            }
        } else {
            return back()->with('error', 'No file was uploaded');
        }


        // Generate a custom _id
        $lastChannel    = Channel::orderBy('_id', 'desc')->first();
        $lastId         = $lastChannel ? intval(substr($lastChannel->_id, -2)) : 0;
        $customId       = 'Y-CH100' . str_pad($lastId + 1, 2, '0', STR_PAD_LEFT);

        /* Saving in MongoDB */
        $channel         = new Channel();
        $channel->_id    = $customId;
        $channel->name   = $request->channel_title;
        $channel->banner = $filePath;

        if($channel->save()) {
            return redirect()->back()->with('success', 'Your Channel has been created');
        } else {
            return redirect()->back()->with('error', 'OOps try again!');
        } 
    }

    public function destroy_channel($id) {

        $channel = Channel::findOrFail($id);

        if ($channel) {
            DB::beginTransaction();
            try {
                ChannelSubcategory::where('category_id', $id)->delete();
                $channel->delete();
                DB::commit();

                return redirect()->back()->with("success", "Channel and related subcategories deleted successfully!");
            } catch (\Exception $e) {
                DB::rollBack();

                return redirect()->back()->with("error", "Oops, try again! Error: " . $e->getMessage());
            }
        } else {
            return redirect()->back()->with("error", "Channel not found!");
        }
    }

    public function edit_channel(Request $request) {
        $channel = Channel::findOrFail($request->id);
        /* Handle the file upload */
        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
    
            /* Check if file is valid */
            if ($file->isValid()) {                
                $originalFileName = $file->getClientOriginalName(); 
                $filePath = $file->storeAs('channel-banners', $originalFileName, 'public'); 
    
                $channel->banner = $filePath;
            } else {
                return back()->with('error', 'Uploaded file is not valid');
            }

        } 

        $channel->name = $request->input('name');

        if($channel->save()) {
            return redirect()->back()->with('success', 'Your Channel has been updated');
        } else {
            return redirect()->back()->with('error', 'Oops try again!');
        } 
    }

    public function add_channel_subcategory(Request $request) {
        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
    
            /* Check if file is valid */
            if ($file->isValid()) {
                $originalFileName = $file->getClientOriginalName(); 
                $filePath = $file->storeAs('channel_subcategory-banners', $originalFileName, 'public'); 
    
            } else {
                return back()->with('error', 'Uploaded file is not valid');
            }
        } else {
            return back()->with('error', 'No file was uploaded');
        }

        $subcategory                    = new ChannelSubcategory();
        $subcategory->category_id       = $request->input('category_id');
        $subcategory->name              = $request->input('name');
        $subcategory->banner            = $filePath;
        $subcategory->upload_video      = $request->has('upload_video');
        $subcategory->live_stream       = $request->has('live_stream');
        $subcategory->interview         = $request->has('interview');
        $subcategory->create_concern    = $request->has('create_concern');
        $subcategory->create_demons     = $request->has('create_demons');
        $subcategory->create_confere    = $request->has('create_confere');
        $subcategory->write_article     = $request->has('write_article');
        $subcategory->share_videos      = $request->has('share_videos');

        if($subcategory->save()) {
            return redirect()->back()->with('success', 'Your Channel subcategory has been created');
        } else {
            return redirect()->back()->with('error', 'Oops try again!');
        } 
    }
    public function edit_channel_subcategory(Request $request, $id) {
        $subcategory = ChannelSubcategory::findOrFail($id);

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
    
            /* Check if file is valid */
            if ($file->isValid()) {
                $originalFileName = $file->getClientOriginalName(); 
                $filePath = $file->storeAs('channel_subcategory-banners', $originalFileName, 'public'); 
    
                $subcategory->banner = $filePath;
            } else {
                return back()->with('error', 'Uploaded file is not valid');
            }
        }

        $subcategory->category_id       = $request->input('category_id');
        $subcategory->name              = $request->input('sub_name');
        $subcategory->upload_video      = $request->has('upload_video');
        $subcategory->live_stream       = $request->has('live_stream');
        $subcategory->interview         = $request->has('interview');
        $subcategory->create_concern    = $request->has('create_concern');
        $subcategory->create_demons     = $request->has('create_demons');
        $subcategory->create_confere    = $request->has('create_confere');
        $subcategory->write_article     = $request->has('write_article');
        $subcategory->share_videos      = $request->has('share_videos');

        if($subcategory->save()) {
            return redirect()->back()->with('success', 'Your Channel subcategory has been updated');
        } else {
            return redirect()->back()->with('error', 'Oops try again!');
        } 
    }

    public function destroy_channel_subcategory($id) {
        $subcategory = ChannelSubcategory::find($id);

        if ($subcategory) {
            $subcategory->delete();
            return redirect()->back()->with('success', 'Channel Subcategory deleted successfully.');
        }

        return redirect()->back()->with('error', 'Channel Subcategory not found.');
    }
}
