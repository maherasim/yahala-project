<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

use Maklad\Permission\Models\Permission;

class UserRolesController extends Controller
{
    public function educated()
    {
        $userLevel = 'educated';
        $modules = $this->getModules($userLevel);
        $permissions = Setting::where('name', $userLevel)->first();
        return response()->json(['permissions' => $permissions['value'] ?? []], 200);
    }

    public function cultivated()
    {
        $userLevel = 'cultivated';
        $modules = $this->getModules($userLevel);
        $permissions = Setting::where('name', $userLevel)->first();
        return response()->json(['permissions' => $permissions['value'] ?? []], 200);
    }

    public function academic()
    {
        $userLevel = 'academic';
        $modules = $this->getModules($userLevel);
        $permissions = Setting::where('name', $userLevel)->first();
        return response()->json(['permissions' => $permissions['value'] ?? []], 200);
    }

    protected function getModules($userLevel = 'standard')
    {
        $modules = json_decode(file_get_contents(base_path('resources/data/modules.json')));

        // Get permission names from Settings
        $settingNamesChunks = array_map(function ($module) use ($userLevel) {
            $settingName = $userLevel . "_" . $module->name;
            return array_map(function ($permission) use ($settingName) {
                $settingName = $settingName . "_" . $permission->name;
                return $settingName;
            }, $module->userPermissions);
        }, $modules);

        $settingNames = [];
        foreach ($settingNamesChunks as $chunk) {
            $settingNames = array_merge($settingNames, $chunk);
        }

        // Get settings from database
        $settings = Setting::whereIn('name', $settingNames)->get();

        // Attach values from settings to their respective permissions
        $modules = array_map(function ($module) use ($userLevel, $settings) {
            $settingName = $userLevel . "_" . $module->name;
            $module->userPermissions = array_map(function ($permission) use ($settingName, $settings) {
                $settingName = $settingName . "_" . $permission->name;
                $setting = $settings->search(function ($item) use ($settingName) {
                    return $item->name === $settingName;
                });
                if ($setting === false) { // then create one
                    $setting = Setting::create([
                        'name' => $settingName,
                        'value' => $permission->defaultValue?? null
                    ]);
                } else {
                    $setting = $settings->get($setting);
                }

                $permission->value = $setting->value;
                return $permission;
            }, $module->userPermissions);
            return $module;
        }, $modules);

        return $modules;
    }
}
