<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class LoginController extends Controller
{
    public function index()
    {
        $pageConfigs = ['myLayout' => 'blank'];
        return view('content.authentications.login', ['pageConfigs' => $pageConfigs]);
    }

    // public

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        (int)$credentials['is_admin_user'] = 1;
        (int)$credentials['status'] = 1;
        if (Auth::attempt($credentials, true)) {

            if (Auth::user()->enable_2fa) {
                auth()->user()->generateCode();
                return redirect()->route('2fa.index');
            }

            activity()
                ->event('logged_in')
                ->log("<strong>" . Auth::user()->name . "</strong> logged in");
            $request->session()->regenerate();

            if(isset(Auth::user()->is_superadmin) && Auth::user()->is_superadmin == 1){

                return redirect()->intended(
                    route('dashboard-analytics')
                );

            }else{

                $permissions = Role::find(Auth::user()->role_id)->permission;
                $role = Role::find(Auth::user()->role_id);
                foreach ($permissions as $permission) {
                    $role->givePermissionTo($permission);
                }
                
                Auth::user()->assignRole($role);

                return redirect()->intended(
                    Auth::user()->can('dashboard.read')?
                    route('dashboard-analytics'):
                    route('welcome')
                );

            }
  
            
        }

        return back()->withInput(request()->only(['email', 'password']))->with('error', "Invalid Credentials!");
    }

    public function logout(Request $request)
    {
        activity()
            ->event('logged_out')
            ->log("<strong>" . Auth::user()->name . "</strong> logged out");
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
