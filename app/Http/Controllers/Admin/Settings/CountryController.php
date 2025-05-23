<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Models\Country;
use App\Models\AvatarsFeeds;
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

        $countries = Country::select('name','flag_path')->orderBy("name", "ASC")->get();

        return view("content.settings.countries.index", compact("countries"));
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


        $flagpath = "";

        if ($request->hasFile('dp')) {
            $randomize = rand(111111, 999999);
            $extension = $request->file('dp')->extension();
            $filename = $randomize . '.' . $extension;
            $image = $request->file('dp')->move('public/images/flags/', $filename);
            $flagpath = $filename;
        }



        $cont = new Country();
        $cont->name = $request->name;

        $cont->flag_path = $flagpath;


        $cont->save();


        //$country = Country::create($validated);

        return back()->with("success", "Country successfully added.");
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

        $country->name = $request->name;

        $flagpath = "";

        if ($request->hasFile('dp')) {
            $randomize = rand(111111, 999999);
            $extension = $request->file('dp')->extension();
            $filename = $randomize . '.' . $extension;
            $image = $request->file('dp')->move('public/images/flags/', $filename);
            $flagpath = $filename;

            $country->flag_path = $flagpath;
        }


        //$cont->save();

        //$country->fill($validated);
        $country->update();

        return back()->with("success", "Country successfully updated.");
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

        return back()->with("success", "Country successfully deleted.");
    }
}
