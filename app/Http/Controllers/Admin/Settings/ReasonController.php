<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\FeedReason;
use Illuminate\Http\Request;

class ReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reasons = FeedReason::all();
        return view('content.settings.reasons.index', compact('reasons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'reason' => 'required',
        ]);
        $status = empty($request->id) ? 'Created' : 'Updated';
        try {
            $reason = FeedReason::updateOrCreate(
                ['_id' => $request->reason_id],
                $validatedData
            );
            return redirect()->route('reasons.index')->with('success', 'Feed Reason Has been ' . $status);
        } catch (\Exception $e) {
            return redirect()->route('reasons.index')->with('error', 'Failed to ' . $status . ' Feed Reason');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reason = FeedReason::find($id);
        if ($reason->delete()) {
            return redirect()->route('reasons.index')->with('success', 'Feed Reason Deleted Successfully');
        } else {
            return redirect()->route('reasons.index')->with('error', 'Failed to Delete Feed Reason');
        }
    }
}
