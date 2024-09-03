<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Models\Emoji;
use Illuminate\Http\Request;

class EmojiFeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emojis = Emoji::all();
        return view('content.emojis.index', compact("emojis"));
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
        $request->validate([
            'emoji_name' => 'required'
        ]);

        $model = new Emoji();
        $model->name = $request->emoji_name;
        if (!empty($request->emoji_image)) {
            $imgPath = Helpers::fileUpload($request->emoji_image, "images/emoji");
            $model->image = $imgPath;
        }
        if ($model->save()) {
            return redirect()->route('feed.emoji')->with('success', 'Emoji Feed Has been inserted');
        } else {
            return redirect()->route('feed.emoji')->with('error', 'Failed to add Emoji Feed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emoji  $emoji
     * @return \Illuminate\Http\Response
     */
    public function show(Emoji $emoji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emoji  $emoji
     * @return \Illuminate\Http\Response
     */
    public function edit(Emoji $emoji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emoji  $emoji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emoji $emoji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emoji  $emoji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emoji $emoji)
    {
        if($emoji->delete()){
            return redirect()->route('feed.emoji')->with('success', 'Emoji Feed Has been Deleted!');
        }else{
            return redirect()->route('feed.emoji')->with('error', 'Something Went Wrong!');
        }
    }
}
