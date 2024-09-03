<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::with(['departments'])->where('parent_id',0)->get();
        return view('content.apps.department',compact('departments'));
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
            'name' => ['required', 'string'],
            'thumbnail_path' => ['nullable','file']
        ]);
        $departmentFile = Department::find($request->id);
        if(!empty($request->thumbnail_path)){
            $thumbnailPath = Helpers::fileUpload($request->thumbnail_path, "images/department_thumbnail");
        }elseif(!empty($departmentFile) && empty($request->thumbnail_path)){
            $thumbnailPath = $departmentFile->thumbnail_path;
        }else{
            $thumbnailPath = null;
        }
        $department = Department::updateOrCreate(['_id' => $request->id],
        [
            'name' => $request->name,
            'thumbnail_path' => $thumbnailPath,
            'parent_id' =>   $request->parent_id ? $request->parent_id : 0
        ]);

        return back();
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
        $department = Department::find($id);
        if(!empty($department)){
            $department->delete();
        }
        return back();
    }

    public function getSubDepartments(Request $request,$id)
    {
        $departments = Department::with(['department'])->where('parent_id',$id)->get();
        return response()->json([
           'departments'=>$departments
        ],200);
    }
}
