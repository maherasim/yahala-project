<?php

namespace App\Http\Controllers\Admin\Donation;

use App\Http\Controllers\Controller;
use App\Models\MongoDonation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function add_donation(Request $request) {
        $donation                   = new MongoDonation();
        $donation->organization_id  = $request->input('organization_id');
        $donation->title            = $request->input('title');
        $donation->paypal           = $request->has('paypal');
        $donation->gpay             = $request->has('gpay');
        $donation->payment_office   = $request->has('payment_office');
        $donation->others           = $request->has('others');
        $donation->type             = $request->input('donation_type');
        $donation->status           = true;
        if($request->input('donation_type') === 'Limited Donation') {
            $donation->amount           = $request->input('amount');
            $donation->currency         = $request->input('currency');
        } 
        
        if($request->input('donation_type') === 'Unlimited Donation') {
            
            $donation->start_date = $request->input('start_date');
            $donation->expired_date = $request->input('expired_date');
        }
        
        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            
            /* Check if file is valid */
            if ($file->isValid()) {
                $originalFileName = $file->getClientOriginalName(); 
                $imagePath = $file->storeAs('donations/banner', $originalFileName, 'public'); 
                $donation->image = $imagePath;
                
            } else {
                return back()->with('error', 'Uploaded file is not valid');
            }
        } else {
            return back()->with('error', 'No file was uploaded');
        }
        
        if($donation->save()) {
            return redirect()->back()->with('success', 'Your Donation has been created');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function destroy_donation($id) {
        $donation = MongoDonation::findOrFail($id);
        $donation->delete();
    
        return redirect()->route('donations.index')->with('success', 'Donation deleted successfully');
    }

    public function edit_donation(Request $request, $id) {
        $donation = MongoDonation::findOrFail($id);
        $donation->organization_id  = $request->input('organization_id');
        $donation->title            = $request->input('title');
        $donation->paypal           = $request->has('paypal');
        $donation->gpay             = $request->has('gpay');
        $donation->payment_office   = $request->has('payment_office');
        $donation->others           = $request->has('others');
        $donation->type             = $request->input('donation_type');
        $donation->status           = true;

        if($request->input('donation_type') === 'Limited Donation') {
            $donation->amount           = $request->input('amount');
            $donation->currency         = $request->input('currency');
        } 
        
        if($request->input('donation_type') === 'Unlimited Donation') {
            $donation->start_date = $request->input('start_date');
            $donation->expired_date = $request->input('expired_date');
        }

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            
            /* Check if file is valid */
            if ($file->isValid()) {
                $originalFileName = $file->getClientOriginalName(); 
                $imagePath = $file->storeAs('donations/banner', $originalFileName, 'public'); 
                $donation->image = $imagePath;
                
            } else {
                return back()->with('error', 'Uploaded file is not valid');
            }
        }

        if($donation->save()) {
            return redirect()->back()->with('success', 'Your Donation has been created');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
