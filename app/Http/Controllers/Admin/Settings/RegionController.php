<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Models\Region;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $regions = Region::orderBy("name", "ASC")->with('cities')->get();
        $countries = Country::orderBy("name", "ASC")->get();
        return view("content.settings.regions.index", compact("regions", "countries"));
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegionRequest $request)
    {
       
        $validated = $request->validated();

        $regin = new Region();
        $regin->name = $request->name;
        $regin->country_id = $request->country_id;
        $regin->shortcode = $request->shortcode;

        $regin->save();

       /// $region = Region::create($validated);

        return back()->with("success", "Region successfully added.");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegionRequest $request, $id)
    {
        $validated = $request->validated();

        $region = Region::find($id);

        $region->name = $request->name;
        $region->country_id = $request->country_id;
        $region->shortcode = $request->shortcode;

        $region->update();

        //$region->fill($validated);
        //$region->save();

        return back()->with("success", "Region successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $region = Region::find($id);

        $region->delete();

        return back()->with("success", "Region successfully deleted.");
    }
}
