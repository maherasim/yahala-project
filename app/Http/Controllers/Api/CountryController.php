<?php

namespace App\Http\Controllers\Api;


use App\Models\Countrylocations;
use App\Models\Stateslocations;
use App\Models\Citylocations;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        die("24");
        $countries = Country::orderBy("name", "ASC")->get();
        return response()->json(['countries' => $countries],200);
    }

    public function search_location(Request $request)
    {

        $searchval = $request->search;

		$results =  Citylocations::where('name', 'like', '%' .  $searchval . '%')->orderBy('name', 'asc')->get();
		
		$aray = array();

		foreach($results as $row){
			
			$aray[] = $row->country->name . " " . $row->state->name . " " . $row->name;

		}

        return response()->json(['message' => 'Ok','locations' => $aray],201);
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountryRequest $request)
    {
        $validated = $request->validated();

        $country = Country::create($validated);

        return response()->json(['message' => 'Country successfully added.','country' => $country],201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountryRequest $request, $id)
    {
        $validated = $request->validated();

        $country = Country::find($id);
        $country->fill($validated);
        $country->save();

        return response()->json(['message' => 'Country successfully updated.','country' => $country],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::find($id);

        $country->delete();

        return response()->json(['message' => 'Country successfully deleted.','country' => $country],201);
    }
}
