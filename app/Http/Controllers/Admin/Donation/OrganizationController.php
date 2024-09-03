<?php

namespace App\Http\Controllers\Admin\Donation;

use App\Http\Controllers\Controller;
use App\Models\MongoDonation;
use App\Models\MongoOrganization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OrganizationController extends Controller
{
    public function add_organization(Request $request) {
        $organization                    = new MongoOrganization();
        $organization->organization_name = $request->input('organization_name');
        $organization->first_name        = $request->input('first_name');
        $organization->last_name         = $request->input('last_name');
        $organization->gender            = $request->input('gender');
        $organization->country           = $request->input('country');
        $organization->city              = $request->input('city');
        $organization->address           = $request->input('address');
        $organization->phone_no          = $request->input('phone_no');
        $organization->email             = $request->input('email');
        $organization->files             = $request->input('logo');
        $organization->status            = true;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            /* Check if file is valid */
            if ($file->isValid()) {
                $originalFileName = $file->getClientOriginalName(); 
                $imagePath = $file->storeAs('organizations/logo', $originalFileName, 'public'); 
                $organization->image = $imagePath;
    
            } else {
                return back()->with('error', 'Uploaded file is not valid');
            }
        } else {
            return back()->with('error', 'No file was uploaded');
        }
    
        if ($organization->save()) {
            return redirect()->back()->with('success', 'Your Organization has been created');
        } else {
            return redirect()->back()->with('error', 'Failed to create Organization');
        }
        
    }

    public function organization_destroy($id) {
        $organization = MongoOrganization::findOrFail($id);

        if ($organization) {
            DB::beginTransaction();
            try {
                MongoDonation::where('organization_id',$id)->delete();
                $organization->delete();
                DB::commit();

                return redirect()->back()->with("success", "Organization and related Donations deleted successfully!");
            } catch (\Exception $e) {
                DB::rollBack();

                return redirect()->back()->with("error", "Oops, try again! Error: " . $e->getMessage());
            }
        } else {
            return redirect()->back()->with("error", "Organization not found!");
        }

    }

    public function organization_update(Request $request, $id) {
        $organization                    = MongoOrganization::findOrFail($id);
        $organization->organization_name = $request->input('organization_name');
        $organization->first_name        = $request->input('first_name');
        $organization->last_name         = $request->input('last_name');
        $organization->gender            = $request->input('gender');
        $organization->country           = $request->input('country');
        $organization->city              = $request->input('city');
        $organization->address           = $request->input('address');
        $organization->phone_no          = $request->input('phone_no');
        $organization->email             = $request->input('email');
        $organization->files             = $request->input('logo');
        $organization->status            = true;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            /* Check if file is valid */
            if ($file->isValid()) {
                $originalFileName = $file->getClientOriginalName(); 
                $imagePath = $file->storeAs('organizations/logo', $originalFileName, 'public'); 
                $organization->image = $imagePath;
    
            } else {
                return back()->with('error', 'Uploaded file is not valid');
            }
        }
    
        if ($organization->save()) {
            return redirect()->back()->with('success', 'Your Organization has been created');
        } else {
            return redirect()->back()->with('error', 'Failed to create Organization');
        }
        
    }
}
