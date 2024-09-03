<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Artist;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\MusicCategory;
use App\Models\Song;
use App\Models\VideoClip;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $artists  = Artist::with('musics')->get();
        $provinces = Region::get();
        $categories = MusicCategory::doesntHave('musics')->get();
        return view('content.artist.index', compact('artists', 'provinces','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.artist.create');
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
            'first_name' => 'required',
            'last_name' => 'required',
            'city' => 'required',
            'gender' => 'required',
            'image' => 'required'
        ]);

        $artist = new Artist();
        $artist->first_name = $request->first_name;
        $artist->last_name = $request->last_name;
        $artist->gender = $request->gender;
        $artist->status = $request->status;
        $artist->city_id = $request->city;
        $artist->province_id = $request->province;
        $artist->image = $request->image ?? '';
        if ($artist->save()) {
            // return redirect()->route('artist.index')->with('success', 'Artist Has been inserted');
            return back()->with("success", "Artist has been added successfully.");
        } else {
            // return redirect()->route('artist.index')->with('error', 'Failed to add artist');
            return back()->with('error', 'Failed to add artist');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist = Artist::findorFail($id);
        return view('content.artist.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artist = Artist::findorFail($id);
        $artist->first_name = $request->first_name;
        $artist->last_name = $request->last_name;
        $artist->dob = $request->dob;
        $artist->gender = $request->gender;
        $artist->image = $request->image ?? '';
        $artist->status = $request->status;
        $artist->city_id = $request->city;
        $artist->province_id = $request->province;

        // if($request->hasFile('image')){
        //    if(isset($artist->image)){
        //        $image_path  = public_path('storage/'.$artist->image);
        //        if(file_exists($image_path)){
        //            unlink($image_path);
        //        }
        //        $path = $request->file('image')->store('/images/artist' , 'public');
        //        $artist->image = $path;
        //    }
        // }

        if ($artist->update()) {
            return redirect()->route('artist.index')->with('success', 'Artist Has been Updated');
        } else {
            return redirect()->route('artist.index')->with('success', 'Artist not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artist = Artist::findorFail($id);
        if ($artist->image) {
            $image_path = public_path('storage/' . $artist->image);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }

        if ($artist->delete($artist->id)) {
            return redirect()->route('artist.index')->with('success', 'Artist  has been deleted successfully.');
        } else {
            return redirect()->route('artist.index')->with('error', 'Failed to delete artist.');
        }
    }

    public function status($id, $status)
    {
        $artist = Artist::find($id);
        $artist->status = $status;
        if ($artist->update()) {
            return redirect()->route('artist.index')->with('success', 'Status Has been Updated');
        } else {
            return redirect()->route('artist.index')->with('error', 'Status is not changed');
        }
    }

    public function get_city($id)
    {
        $province = Region::findorFail($id);
        return $city = City::where('region_id', $province->id)->get();
    }

    public function deleteArtistImage($id)
    {
        $music = Artist::find($id);
        if ($music && isset($music->image)) {
            $path = public_path('storage/' . $music->image);
            if (file_exists($path)) {
                unlink($path);
            }

            // Remove the image filename from the model attribute
            $music->image = null;
            $music->save();
        }

        return [
            'status' => true
        ];
    }

    public function getArtistDetail(Request $request)
    {
        $artist = Artist::find($request->id);
        $albums = Album::where('artist_id',$artist->id)->with(['artist'=>function($q){
            $q->with('songs');
        }])->get();
        $songs = Song::where('artist_id',$artist->id)->get();
        $clips = VideoClip::where('artist_id',$artist->id)->get();
        return response()->json(['albums' => $albums,'songs' => $songs,'clips' => $clips],200);
    }
}
