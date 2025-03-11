<?php

namespace App\Http\Controllers\Api;

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
        $emojis = Emoji::all()->map(function ($emoji) {
            $emoji->image = url('public/storage/' . $emoji->image);
            return $emoji;
        });
    
        return response()->json(['emojis' => $emojis], 200);
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
            return response()->json(['message' => 'Emoji Has been inserted', 'emoji' => $model], 201);
        } else {
            return response()->json(['message' => 'Failed to add Emoji'], 400);
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
        if ($emoji->delete()) {
            return response()->json(['message' => 'Emoji Has been Deleted'], 201);
        } else {
            return response()->json(['message' => 'Failed to Delete Emoji'], 400);
        }
    }
}
