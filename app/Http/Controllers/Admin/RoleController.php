<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use App\Models\Permission;
use MongoDB\BSON\ObjectId;
//use Spatie\Permission\Traits\HasRoles;
//use Spatie\Permission\Models\Role as SpatieRole;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;


class RoleController extends Controller
{
    //use HasRoles;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$role = Role::first();
       // $role->givePermissionTo('dashboard.read');
        
        
   // die("");
//$permissions = Permission::whereIn('name', ['dashboard.read'])->first();




// Manually sync permissions
//$role->permissions()->sync($permissions->pluck('_id'));

    //   $role->syncPermissions(['dashboard.read']);
        
//$permissions = Permission::whereIn('name', ['dashboard.read'])->get();

//print_r($permissions);


//$role->syncPermissions($permissions);

//die("27");
        $roles = Role::all();
        $permissions = Permission::all();


        return view("content.settings.roles.index", compact("roles", "permissions"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleRequest $request)
    {

        $permissions = Permission::whereIn('name', ['dashboard.read'])->get();

        
        $validated = $request->validated();

        $role = new Role();
        $role->name = $request->input('name');
        $role->permission = $request->input('permissions');
        $role->guard_name = $request->input('guard_name');
        $role->save();



//print_r($validated);
//die("");

       // $role = Role::create($validated);

        $permissions = [];
        
        
        $post_permissions = $request->input('permissions');
        
        
        foreach ($post_permissions as $key => $val) {
            $permissions[intval($val)] = intval($val);
        }
       // $role->syncPermissions($permissions);

//print_r($permissions);
//die("");




      //  try {
          //  $role->syncPermissions($validated['permissions']?? []);
      //  } catch (\Throwable $e) {
                return back()->with("success", "Role successfully created.");
      //  }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleRequest $request, $id)
    {
        $validated = $request->validated();
        if (array_key_exists('permissions', $validated)) {
            $permissions = $validated['permissions'];
        } else {
            $permissions = [];
        }

        $role = Role::find($id);
        if ($role->name === 'Super Admin')
            abort(403);
        $role->name = $validated['name'];
        $role->permission = $permissions;
        $role->save();

        session(['permissions' => $permissions]);

        return back()->with("success", "Role successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objectId = new \MongoDB\BSON\ObjectId($id);
        Role::where('_id', $objectId)->delete();
        return back()->with("success", "Role successfully deleted.");
    }
}
