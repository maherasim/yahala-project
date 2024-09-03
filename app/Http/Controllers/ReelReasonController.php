<?php

namespace App\Http\Controllers;
use App\Models\RealReason;

use Illuminate\Http\Request;

class ReelReasonController extends Controller
{
    public function index()
    {
        $reasons = RealReason::all();
        return view('content.settings.reelreason.index', compact('reasons'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'reason' => 'required',
        ]);
        $status = empty($request->id) ? 'Created' : 'Updated';
        try {
            $reason = RealReason::updateOrCreate(
                ['_id' => $request->reason_id],
                $validatedData
            );
            return redirect()->route('reels.reasons')->with('success', 'Feed Reason Has been ' . $status);
        } catch (\Exception $e) {
            return redirect()->route('reels.reasons')->with('error', 'Failed to ' . $status . ' Feed Reason');
        }
    }
}
