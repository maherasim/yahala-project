<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Models\User;
use App\Models\TaskModel;

class Task extends Controller
{
  public function index(){

    $users = User::where('is_admin_user', true)->get();
    $tasks = TaskModel::with('users.roles')->get();
    return view('content.apps.app-task-list', compact("users","tasks"));

  }

  public function store(StoreTaskRequest $request){
        $validated = $request->validated();

        $Task = TaskModel::create($validated);

        return back()->with("success", "Task successfully created.");
 }

 /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $validated = $request->validate([
            'title' => 'required',
            'user_id' => 'required',
            'task_start' => 'required',
            'task_deliver' => 'required'
        ]);

        $prefix = TaskModel::find($id);

        $prefix->fill($validated);
        $prefix->save();

        return back()->with("success", "Task successfully updated.");
    }

    public function destroy($id)
    {
        $prefix = TaskModel::find($id);

        $prefix->delete();

        return back()->with("success", "Task successfully deleted.");
    }

}
