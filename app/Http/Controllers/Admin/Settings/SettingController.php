<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AppInfo;
use App\Models\StoryTime;

class SettingController extends Controller
{
    public function save(Request $request)
    {
        $validated = $request->validate([
            "name" => "required",
            "value" => "nullable",
            "description" => "nullable"
        ]);

        extract($validated);

        $setting = Setting::firstOrCreate(['name' => $name]);
        $setting->value = $value;
        $setting->description = isset($description)? $description: null;
        $setting->save();

        return "1";
    }

    public function saveMany(Request $request)
    {
        $validated = $request->validate([
            "settings" => "required|array",
            "settings.*.name" => "required",
            "settings.*.value" => "nullable",
            "settings.*.description" => "nullable"
        ]);

        extract($validated);

        foreach ($settings as $item) {
            $setting = Setting::firstOrCreate(['name' => ($item['name']?? '')]);
            $setting->value = $item['value']?? '';
            $setting->description = $item['description']?? '';
            $setting->save();
        }

        return "1";
    }

    public function get_app_info()
    {
        $appinfo = AppInfo::first();
        return view('content.apps.app-appinfo',compact('appinfo'));
    }

    public function store_app_info(Request $request)
    {
        AppInfo::truncate();
        $app_info = AppInfo::create($request->all());
        return back();
    }

    public function storage_setting(){
        $storyTime = StoryTime::first(); 
        return view('content.stories.story_time',compact('storyTime'));
   }
   public function store(Request $request)
   {
       //dd($request->all());
       $validated = $request->validate([
           'length' => 'nullable|string|min:0|max:100',
           'is_active' => 'nullable|string',
       ]);
//dd( $validated);
       $storyTime = StoryTime::first(); // Assuming there's only one record
       if ($storyTime) {
           $storyTime->update($validated);
       } else {
           StoryTime::create($validated);
       }
//dd($storyTime);
       return redirect()->back()->with('success', 'Story Time updated successfully!');
   }


 
}
