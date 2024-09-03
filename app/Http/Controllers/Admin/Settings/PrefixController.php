<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Prefix;
use Illuminate\Http\Request;

class PrefixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prefixes = Prefix::orderBy("prefix_for", "ASC")->get();
        return view('content.settings.prefix_settings', compact('prefixes'));
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
        $data = $request->validate([
            'prefix_for' => 'required',
            'prefix_id' => 'required',
        ]);

        // dd("ok");

        $prefix = Prefix::create($data);

        return back()->with("success", "prefix successfully added.");
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
        $validated = $request->validate([
            'prefix_for' => 'required',
            'prefix_id' => 'required',
        ]);

        $prefix = Prefix::find($id);

        $prefix->fill($validated);
        $prefix->save();

        return back()->with("success", "Prefix successfully updated.");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prefix = Prefix::find($id);

        $prefix->delete();

        return back()->with("success", "Prefix successfully deleted.");
    }

}
