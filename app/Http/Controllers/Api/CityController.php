<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Region;
use App\Models\Country;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::orderBy("name", "ASC")->get();
        $regions = Region::orderBy("name", "ASC")->get();
        $countries = Country::orderBy("name", "ASC")->get();
        return response()->json([
            'regions' => $regions,
            'countries' => $countries,
            'cities' => $cities
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
    public function store(StoreCityRequest $request)
    {
       // dd($request->all());
        $validated = $request->validated();

        $cities = $validated['cities'];
        unset($validated['cities']);
        
        foreach ($cities as $city)
            City::create(array_merge($validated, ['zipcode' => $city['zipcode'], 'name' => $city['name']]));

            return response()->json([
                'success'=>'true',
                'message'=>'Cities created successfully'
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
    public function update(UpdateCityRequest $request, $id)
    {
        $validated = $request->validated();

        $city = City::find($id);
        $city->fill($validated);
        $city->save();

        return response()->json([
            'success'=>'true',
            'message'=>'Cities Updated successfully'
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
        $city = City::find($id);

        $city->delete();

        return response()->json([
            'success'=>'true',
            'message'=>'City Deleted successfully'
        ]);
    }
}
