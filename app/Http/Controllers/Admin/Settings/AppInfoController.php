<?php

namespace App\Http\Controllers\Admin\Settings;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AppInfo;
use Illuminate\Support\Facades\Validator;

class AppInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $rquest)
    {
        try {
            $appInfo = AppInfo::all()->last()->address;
        } catch (\Throwable $e) {
            $appInfo = "";
        }
        return view('content.apps.app-info', compact('appInfo', 'appInfo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'address' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            try {
            $appInfo = AppInfo::updateOrCreate(['_id' => $request->id], [
                'address' => $request->address
            ]);
            } catch (\Throwable $e) {
                return back()->with('success', 'App info has been created');
            }
            return back()->with('success', 'App info has been created');
        }
    }

}
