<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\States;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DateTime;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

		$state_list =  States::orderBy('country_code', 'asc')->paginate(20);
		
		return view('state_list', [
			'state_list' => $state_list
		]);
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
		
			
        //
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
