<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChannelReason;
use Illuminate\Http\Request;

class ChannelReasonController extends Controller
{
    public function add_reason(Request $request) {
        $data = !empty($request->input('title') && $request->input('description'));
        if($data) {
            $reason = new ChannelReason();
            $reason->title = $request->input('title');
            $reason->description = $request->input('description');
            if($reason->save()) {
                return redirect()->back()->with('success','Channel Reason Created Successfully!');
            } else {
                return redirect()->back()->with('error','Oops Something went wrong!');
            }
        } else {
            return redirect()->back()->with('error','All Fields are Required.');
        }
    }
    public function edit_reason(Request $request, $id) {
        $reason = ChannelReason::findOrFail($id);
        $reason->title = $request->input('title');
        $reason->description = $request->input('description');
        if($reason->save()) {
            return redirect()->back()->with('success','Channel Reason Updated Successfully!');
        } else {
            return redirect()->back()->with('error','Oops Something went wrong!');
        }
    }

    public function destroy_reason($id) {
        $reason = ChannelReason::findOrFail($id);
        if($reason->delete()) {
            return redirect()->back()->with('success','Channel Reason Deleted Successfully!');
        } else {
            return redirect()->back()->with('error','Oops Something went wrong!');
        }
        
    }
}
