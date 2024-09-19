<?php

namespace App\Http\Controllers\Api;

use App\Models\Setting;
use App\Models\PolicyTerm;
use Illuminate\Http\Request;
use App\Models\PolicyAndTerm;
use App\Http\Controllers\Controller;
use App\Models\Translation;
use App\Models\Language;


class PolicyAndTermsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PolicyAndTerm::all();
        return response()->json(['policy' => $data],200);
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
            'name' => 'required',
        ]);

        $policy = PolicyAndTerm::create([
            'name' => $request->name
        ]);

        return response()->json(['message' => 'New privacy policy and terms section has been created.', 'policy' => $policy],201);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $policy = PolicyAndTerm::find($id);
         if($policy->delete($policy->id)){
            return response()->json(['message' => 'New privacy policy and terms section has been deleted.', 'policy' => $policy],201);
         }
    }

    public function saveFileds(Request $request){
        $request->validate([
            'privacy_policy' => 'required',
        ]);

        $check = PolicyAndTerm::find($request->id);
        $check->privacy_policy = $request->privacy_policy;
        if($check->save()){
            return response()->json(['message' => 'Privacy Policy and term updated successfully.', 'policy' => $check],201);
        }else{
            return response()->json(['message' => 'Failed to update Privacy Policy and term.', 'policy' => $check],403);
        }
    }
}
