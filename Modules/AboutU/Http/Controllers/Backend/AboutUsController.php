<?php

namespace Modules\AboutU\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use Modules\AboutU\Models\AboutU;
use Modules\AboutU\Models\AboutFeature;

class AboutUsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'AboutUs';

        // module name
        $this->module_name = 'aboutus';

        // directory path of the module
        $this->module_path = 'aboutu::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = AboutU::class;
    
    }

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
        $hasRecords = $module_model::exists();

        logUserAccess($module_title . ' ' . $module_action);

        return view(
            "{$module_path}.{$module_name}.index_datatable",
            compact('module_title', 'module_name', "{$module_name}", 'module_icon', 'module_name_singular', 'module_action','hasRecords')
        );
    }

    public function index_data()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_model = $this->module_model;

        $data = $module_model::select('*');

        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                return view('backend.includes.action_column', ['module_name' => $this->module_name, 'data' => $data]);
            })
            ->editColumn('updated_at', function ($data) {
                return Carbon::now()->diffInHours($data->updated_at) < 25 ? $data->updated_at->diffForHumans() : $data->updated_at->isoFormat('llll');
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $module_name = $this->module_name;        
        $rules = [
            'successfully_trained' => 'required|integer',
            'classes_completed' => 'required|integer',
            'satisfaction_rate' => 'required|integer',
            'student_community' => 'required|integer',
            'popular_course_title1' => 'nullable|string|max:255',
            'popular_course_description1' => 'nullable|string',
            'popular_course_cta_text1' => 'nullable|string|max:255',
            'popular_course_cta_link1' => 'nullable|string',
            'banner_image' => 'required|mimes:jpeg,png,jpg|max:2048',
        ];
    
        // Validate feature fields dynamically
        for ($i = 0; $i <= 2; $i++) {
            $rules["title_$i"] = 'required|string|max:255';
            $rules["icon_$i"] = 'required|mimes:jpeg,png,jpg|max:2048';
            $rules["description_$i"] = 'required|string';
        }
    
        $request->validate($rules);
    
        // Process form data
        $postData = $request->except(['title_1', 'icon_1', 'description_1', 'title_2', 'icon_2', 'description_2', 'title_3', 'icon_3', 'description_3']);

        foreach (['banner_image', 'student_image_1', 'student_image_2'] as $field) {
            if ($request->hasFile($field)) {
                // Store new image
                $postData[$field] = $request->file($field)->store("public/{$field}s");
            }
        }
    
        // Create AboutU record
        $aboutU = AboutU::create($postData);
    
        // Prepare features data
        $featuresData = [];
        for ($i = 0; $i <= 2; $i++) {
            $featuresData[] = [
                'title' => $request->input("title_$i"),
                'icon' => $request->hasFile("icon_$i") ? $request->file("icon_$i")->store('public/icons') : null,
                'description' => $request->input("description_$i"),
            ];
        }
    
        // Store features with the associated AboutU ID
        AboutU::storeFeatures($featuresData);
    
        flash("New 'About Us' record added successfully!")->success()->important();
        return redirect("admin/{$module_name}");
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        $module_action = 'Edit';

        $$module_name_singular = $data = $module_model::findOrFail($id);
        // Fetch class data dynamically
        $feature = AboutFeature::select('id','title','icon','description')->get();
        
        logUserAccess($module_title . ' ' . $module_action . ' | Id: ' . $$module_name_singular->id);

        return view(
            "{$module_path}.{$module_name}.edit",
            compact(
                'module_title',
                'module_name',
                'module_path',
                'module_icon',
                'module_action',
                'module_name_singular',
                "{$module_name_singular}",
                'data',
                'feature' // ✅ Ensure classes is passed to the view
            )
        );
    }
    

    public function update(Request $request, $id)
    {
        $module_name = $this->module_name;        

        $aboutUs = AboutU::findOrFail($id);
    
        $rules = [
            'successfully_trained' => 'required|integer',
            'classes_completed' => 'required|integer',
            'satisfaction_rate' => 'required|integer',
            'student_community' => 'required|integer',
            'popular_course_title1' => 'nullable|string|max:255',
            'popular_course_description1' => 'nullable|string',
            'popular_course_cta_text1' => 'nullable|string|max:255',
            'popular_course_cta_link1' => 'nullable|string',
            'banner_image' => 'nullable|mimes:jpeg,png,jpg|max:2048',
        ];
    
        // Validate feature fields dynamically
        for ($i = 0; $i <= 2; $i++) {
            $rules["title_$i"] = 'required|string|max:255';
            $rules["icon_$i"] = 'nullable|mimes:jpeg,png,jpg|max:2048';
            $rules["description_$i"] = 'required|string';
        }
    
        $request->validate($rules);
    
        // Process form data
        $postData = $request->except(['title_1', 'icon_1', 'description_1', 'title_2', 'icon_2', 'description_2', 'title_3', 'icon_3', 'description_3']);
    
        // Process image fields dynamically
        foreach (['banner_image', 'student_image_1', 'student_image_2'] as $field) {
            if ($request->hasFile($field)) {
                // Delete old image if it exists
                Storage::delete($aboutUs->$field);

                // Store new image
                $postData[$field] = $request->file($field)->store("public/{$field}s");
            }
        }

    
        $aboutUs->update($postData);
    
        // Prepare features data
        $featuresData = [];
        for ($i = 0; $i <= 2; $i++) {
            $featuresData[] = [
                'id' => $request->input("feature_id_$i"), // Assuming feature IDs are passed
                'title' => $request->input("title_$i"),
                'icon' => $request->hasFile("icon_$i") ? $request->file("icon_$i")->store('public/icons') : null,
                'description' => $request->input("description_$i"),
            ];
        }
    
        // Update features
        AboutU::updateFeatures($featuresData);
    
        flash("'About Us' record updated successfully!")->success()->important();
        return redirect("admin/{$module_name}");
    }

    public function destroy($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'destroy';

        $$module_name_singular = $module_model::findOrFail($id);

        $$module_name_singular->delete();

        AboutFeature::truncate();

        flash(icon() . '' . label_case($module_name_singular) . ' Deleted Successfully!')->success()->important();

        logUserAccess($module_title . ' ' . $module_action . ' | Id: ' . $$module_name_singular->id);

        return redirect("admin/{$module_name}");
    }
    
}