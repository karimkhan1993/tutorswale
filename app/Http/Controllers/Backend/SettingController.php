<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Settings';

        // module name
        $this->module_name = 'settings';

        // directory path of the module
        $this->module_path = 'settings';

        // module icon
        $this->module_icon = 'fas fa-cogs';

        // module model name, path
        $this->module_model = "App\Models\Setting";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = $module_model::paginate();

        Log::info(label_case($module_title.' '.$module_action).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');

        return view(
            "backend.{$module_path}.index",
            compact('module_title', 'module_name', "{$module_name}", 'module_path', 'module_icon', 'module_action', 'module_name_singular')
        );
    }

    public function store(Request $request) 
    {
        $rules = Setting::getValidationRules();
        $data = $this->validate($request, $rules);
    
        $validSettings = array_keys($rules);
    
        foreach ($data as $key => $val) {
            if (in_array($key, $validSettings)) {
    
                // If the setting is aboutus_description, process image paths
                if ($key == 'aboutus_description' || $key == 'whyChooseUs_statistic') {
                    // Convert {{ asset('...') }} to full URL before saving
                    $val = preg_replace_callback('/{{\s*asset\((.*?)\)\s*}}/', function ($matches) {
                        return asset(trim($matches[1], "'\""));
                    }, $val);
                }

                if ($key == 'aboutus_image' && $request->hasFile('aboutus_image')) {
                    $image = $request->file('aboutus_image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $imagePath = 'public/setting/' . $imageName; // Storage path
                    
                    // Ensure the directory exists
                    if (!Storage::exists('public/setting')) {
                        Storage::makeDirectory('public/setting');
                    }
                
                    // Delete the old image if it exists
                    $oldImage = Setting::get('aboutus_image');
                    if (!empty($oldImage)) {
                        $oldImagePath = str_replace('/storage/', 'public/', $oldImage); // Convert to storage path
                        Storage::delete($oldImagePath); // Delete the old file
                    }
                
                    // Store the new image
                    $image->storeAs('public/setting', $imageName);
                
                    // Convert storage path to a public URL
                    $val = Storage::url($imagePath); // Generates: /storage/setting/image.jpg
                }
                
                Setting::add($key, $val, Setting::getDataType($key));
            }
        }
    
        return redirect()->back()->with('status', 'Settings have been saved.');
    }
    
}
