<?php

namespace App\Http\Controllers\Api;


use App\Models\Countrylocations;
use App\Models\Stateslocations;
use App\Models\Citylocations;
use App\Models\Nationality;
use App\Models\AvatarsFeeds;


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
    
    public function showcountries()
    {
        $country_list = Country::orderBy('name', 'asc')->get();
  
        return response()->json([
            'country_list' => $country_list
        ]);
    }
    
    public function getNationality()
    {
        $nationalities = Nationality::all()->map(function($nationality) {
            // Use the `storage_path` helper to create the correct URL
            $nationality->thumbnail_path = asset('storage/' . $nationality->thumbnail_path); // Ensure correct path
            return $nationality;
        });
    
        return response()->json([
            'success' => true,
            'message' => 'Nationalities retrieved successfully.',
            'data' => $nationalities,
        ]);
    }
    public function AvatarsFeeds34()
    {
        try {
            $feeds = AvatarsFeeds::all();
    
            $formattedFeeds = $feeds->map(function ($feed) {
                return [
                    'id' => $feed->_id,
                    'avatar_Id' => $feed->avatar_Id,
                    'user_Id' => $feed->user_Id,
                    'title' => $feed->title,
                    'images' => is_array($feed->image) ? $feed->image : [],
                    'videos' => is_array($feed->videos) ? $feed->videos : [],
                    'background_video' => is_string($feed->background_video) ? $feed->background_video : null, // ✅ added
                    'content' => $feed->content ?? '',
                    'textemoji' => $feed->textemoji ?? '',
                    'forwards' => $feed->forwards ?? 0,
                    'comments' => is_array($feed->comments) ? $feed->comments : [],
                    'likes' => $feed->likes ?? 0,
                    'textSize' => $feed->textSize ?? null,
                    'shareType' => $feed->shareType ?? null,
                    'user_type' => $feed->user_type ?? null,
                    'feed_type' => $feed->feed_type ?? null,
                    'background_image' => is_string($feed->background_image) ? $feed->background_image : null,
                    'text_color' => $feed->text_color ?? null,
                    'grid_style' => $feed->grid_style ?? null,
                    'description' => $feed->description ?? null,
                    'text' => $feed->text ?? null,
                    'text_properties' => $feed->text_properties ?? null,
                    'created_at' => $feed->created_at,
                    'updated_at' => $feed->updated_at
                ];
            });
    
            return response()->json([
                'success' => true,
                'message' => 'Feeds retrieved successfully.',
                'data' => $formattedFeeds
            ], 200);
    
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving feeds.',
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ], 500);
        }
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
