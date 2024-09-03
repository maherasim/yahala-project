<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Country;
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
        return response()->json([
            'regions' => $regions,
            'countries' => $countries,
        ]);
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
    public function store(StoreRegionRequest $request)
    {
        // dd($request->all());
        $validated = $request->validated();

        $region = Region::create($validated);

        return response()->json([
            'success'=>'true',
            'message'=>'Region created successfully'
        ]);
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
    public function update(UpdateRegionRequest $request, $id)
    {
        $validated = $request->validated();

        $region = Region::find($id);
        $region->fill($validated);
        $region->save();

        return response()->json([
            'success'=>'true',
            'message'=>'Region updated successfully'
        ]);
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

        return response()->json([
            'success'=>'true',
            'message'=>' Region Deleted successfully'
        ]);
    }
}
