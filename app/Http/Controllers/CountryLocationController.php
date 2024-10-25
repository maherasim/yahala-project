<?php

namespace App\Http\Controllers;

use App\Models\Countrylocations;
use App\Models\Stateslocations; 
use App\Models\Citylocations;
use App\Models\Nationality;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DateTime;

class CountryLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request )
    {
		//return redirect()->route('countrylocation.search_location')->with('success','Country added successfully.');
		
		  /*
		  set_time_limit(3000);
		  foreach ($cities as $city){
			$ncity = new City();
			$ncity->cityid = $city['id'];
			$ncity->name = $city['name'];
			$ncity->state_id = $city['state_id'];
			$ncity->country_id = $city['country_id'];
			$ncity->save();
			
		  }

		  die("done");
		*/


		//$country_list =  City::where('name', 'Ajman')->orderBy('name', 'asc')->paginate(20);
		$country_list =  Countrylocations::orderBy('name', 'asc')->paginate(20);

		
		return view('content.settings.locations.country_list', [
			'country_list' => $country_list
		]);
    }

	


	public function search_location(Request $request)
    {

		$searchval = "";
		if($request->search){
			$searchval = $request->search;
		}

		$results =  Citylocations::where('name', 'like', '%' .  $searchval . '%')->orderBy('name', 'asc')->get();
		
		$aray = array();

		foreach($results as $row){
			
			$aray[] = $row->country->name . " " . $row->state->name . " " . $row->name;

		}

		return response()->json($aray, 200);
		
    }
	public function getnatioanlity(){

		$nationality = Nationality::get();
        return view('content.apps.nationality',compact('nationality'));
	}
	
	public function nationalitystore(Request $request)
	{
		// 1. Validate the request inputs
		$validatedData = $request->validate([
			'name' => 'required|string|max:255',
			'thumbnail_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image file
		]);
	
	 
		$thumbnailPath = null;
		if ($request->hasFile('thumbnail_path')) {
			$thumbnailPath = $request->file('thumbnail_path')->store('thumbnails', 'public');
		}
	
	
		$nationality = Nationality::create([
			'name' => $validatedData['name'],
			'thumbnail_path' => $thumbnailPath, // Store the path of the uploaded file
		]);
	
		// 4. Return response
		if ($nationality) {
			return redirect()->back()
				->with('success', 'Nationality created successfully!');
		} else {
			return back()->withInput()
				->with('error', 'Failed to create nationality. Please try again.');
		}
	}

	public function nationalitydestroy($id)
	{
		$nationality = Nationality::findOrFail($id);
		$nationality->delete();
	
		return redirect()->back()->with('success', 'Nationality deleted successfully');
	}
	
	 

	public function nationalityupdate(Request $request, $id)
	{
		 
		$request->validate([
			'name' => 'required|string|max:255',
			'thumbnail_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust as needed
		]);
	
		// Find the nationality by ID
		$nationality = Nationality::findOrFail($id);
	
		// Update the nationality name
		$nationality->name = $request->input('name');
	
		// Check if a new thumbnail is uploaded
		if ($request->hasFile('thumbnail_path')) {
			// You may want to delete the old thumbnail if necessary
	
			// Store the new thumbnail and update the path
			$nationality->thumbnail_path = $request->file('thumbnail_path')->store('nationalities', 'public'); // Adjust storage path as needed
		}
	
		// Save the changes to the database
		$nationality->save();
	
		// Redirect back with a success message
		return redirect()->back()->with('success', 'Nationality updated successfully');
	}
	



	public function get_pricing($id){
		$avatar =  Pricings::where('_id', $id)->first();
		
		
		echo json_encode($avatar);
	}
	
	public function pricing(Request $request){
		
		$url = url('/wishes/setting/pricing');
		
		if($request->isdelete){
			$delid = $request->delid;
			
			$delprice =  Pricings::where('_id', $delid)->first();
			
			$delprice->delete();	
			
			return Redirect::to($url);
			
			return redirect()->route('pricing')->with('success','Price deleted successfully.');
		}
		
		if($request->title){
			
			
			$imgfilename = "";
		
          	if ($request->hasFile('dp')) {
				$randomize = rand(111111, 999999);
				$extension = $request->file('dp')->extension();
				$filename = $randomize . '.' . $extension;
				$image = $request->file('dp')->move('images/prices/', $filename);
				$imgfilename = $filename;
			}
			
			$title = $request->title;
			$days = $request->days;
			$currency = $request->currency;
			$price = $request->price;
			$description = strip_tags($request->description);
			
			if($request->upid != "0"){
				
				$id = $request->upid;
				$newprice =  Pricings::where('_id', $id)->first();
				
				
				if($request->file_removed == 1){
					
				}else{
					$imgfilename = $newprice->image;
				}
				
			//	$newprice = new Pricings();
				$newprice->title = $title;
				$newprice->days = $days;
				$newprice->currency = $currency;
				$newprice->price = $price;
				$newprice->desription = $description;
				$newprice->image = $imgfilename;
				$newprice->update();
				return Redirect::to($url);
				return redirect()->route('pricing')->with('success','Price updated successfully.');
			}else{
				//save record
				$newprice = new Pricings();
				$newprice->title = $title;
				$newprice->days = $days;
				$newprice->currency = $currency;
				$newprice->price = $price;
				$newprice->desription = $description;
				$newprice->image = $imgfilename;
				$newprice->save();
				return Redirect::to($url);
				return redirect()->route('pricing')->with('success','Price added successfully.');
				
			}
			
			
			
				
		}
		
		$view = 'daily';
        if (request()->view) {
          $view = request()->view;
        }
		
		$pricings =  Pricings::orderBy('created_at', 'desc')->get();
		
		
		
		return view('pricing', [
			'pricings' => $pricings
		]);
		
       // return view('pricing',compact('view'));
	}
	
	public function manag_avatars($id = 0){
		
		
	}
	
	public function get_avatars($id){
		
	}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
		
		return view('avatars_add');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
		
		$newcont = New Countrylocations();
		$newcont->name = $request->name;
		$newcont->iso2 = $request->iso2;
		$newcont->iso3 = $request->iso3;
		$newcont->save();
		return redirect()->action([CountryLocationController::class, 'index'])->with('success', 'Data stored successfully!');
		
			
    }

    /**
     * Display the specified resource.
     */
    public function show()
{
    
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
		
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
		
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Avatars $avatar)
    {
		//
        //
    }
}
