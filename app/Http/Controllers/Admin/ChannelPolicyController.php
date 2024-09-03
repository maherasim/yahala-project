<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChannelPolicy;
use App\Models\PolicySection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChannelPolicyController extends Controller
{
    public function add_policy(Request $request) {
        $data = !empty($request->input('description') && $request->input('id'));
        if($data) {
            $policy = new ChannelPolicy();
            $policy->section_id = $request->input('id');
            $policy->description = $request->input('description');
            if($policy->save()) {
                return redirect()->back()->with("success", "Channel's Policy Added Successfully!");
            } else {
                return redirect()->back()->with("error", "Oops Try Again!");
            }
        } else {
            return redirect()->back()->with("error", "All Fields are required!");
        }
    }
    public function edit_policy(Request $request) {
        $data = !empty($request->input('description') && $request->input('id'));
        if($data) {
            $policyId = $request->input('id');
            $policy = ChannelPolicy::findOrFail($policyId);
            
            $policy->description = $request->input('description');
            if($policy->save()) {
                return redirect()->back()->with("success", "Channel's Policy Added Successfully!");
            } else {
                return redirect()->back()->with("error", "Oops Try Again!");
            }
        } else {
            return redirect()->back()->with("error", "All Fields are required!");
        }
    }

    public function add_section(Request $request) {
        $data = !empty($request->input('name'));
        if($data) {
            $section = new PolicySection();
            $section->section_name = $request->input('name');
            if($section->save()) {
                return redirect()->back()->with("success", "New section Added Successfully!");
            } else {
                return redirect()->back()->with("error", "Oops Try Again!");
            } 
        } else {
            return redirect()->back()->with("error", "All Fields are required!");
        }
    }
    public function edit_section(Request $request, $id) {
        $data = !empty($request->input('name'));
        if($data) {
            $section = new PolicySection();
            $section->section_name = $request->input('name');
            if($section->save()) {
                return redirect()->back()->with("success", "New section Added Successfully!");
            } else {
                return redirect()->back()->with("error", "Oops Try Again!");
            } 
        } else {
            return redirect()->back()->with("error", "All Fields are required!");
        }
    }

    // public function destroy_section($id) {
    //     $section = PolicySection::findOrFail($id);
    //     if($section) {
    //         $section->delete();
    //         return redirect()->back()->with("success", "Section Deleted Successfully!");
    //     } else {
    //         return redirect()->back()->with("error", "Oops Try Again!");
    //     }
    // }

    public function destroy_section($id) {
        $section = PolicySection::findOrFail($id);

        if ($section) {
            DB::beginTransaction();
            try {
                ChannelPolicy::where('section_id', $id)->delete();
                $section->delete();
                DB::commit();

                return redirect()->back()->with("success", "Section and related policies deleted successfully!");
            } catch (\Exception $e) {
                DB::rollBack();

                return redirect()->back()->with("error", "Oops, try again! Error: " . $e->getMessage());
            }
        } else {
            return redirect()->back()->with("error", "Section not found!");
        }
    }

    // public function destroy_desc($id) {
    //     $policy_desc = ChannelPolicy::findOrFail($id);
    //     dd($policy_desc);
    //     if ($policy_desc) {
    //         $policy_desc->delete();
    //         return redirect()->back()->with("success", "Policy Description Deleted Successfully!");
    //     } else {
    //         return redirect()->back()->with("error", "Description not found!");
    //     }
    // }

    public function destroy_desc($id) {
        $policy_desc = ChannelPolicy::findOrFail($id);
        if ($policy_desc) {
            $policy_desc->delete();
            return redirect()->back()->with("success", "Policy Description Deleted Successfully!");
        } else {
            return redirect()->back()->with("error", "Description not found!");
        }
    }
    
    
    

}
