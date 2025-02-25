<?php

namespace Modules\SubjectManagement\Http\Controllers\Backend;

use App\Authorizable;
use Carbon\Carbon;

use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

use Modules\ClassManagement\Models\ClassManagement;
class SubjectManagementsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'SubjectManagements';

        // module name
        $this->module_name = 'subjectmanagements';

        // directory path of the module
        $this->module_path = 'subjectmanagement::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\SubjectManagement\Models\SubjectManagement";
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
        $classes = ClassManagement::pluck('name', 'id')->toArray();

        logUserAccess($module_title . ' ' . $module_action);
        // echo "hello";
        return view(
            "{$module_path}.{$module_name}.index_datatable",
            compact('module_title', 'module_name', "{$module_name}", 'module_icon', 'module_name_singular', 'module_action', 'classes')
        );
    }



    public function index_data()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        $module_action = 'List';
    
        $page_heading = label_case($module_title);
        $title = $page_heading . ' ' . label_case($module_action);
    
        // Fetch data with class names
        $subjectsData = $module_model::select('subjectmanagements.id', 'subjectmanagements.subjects', 'subjectmanagements.updated_at', 'classmanagements.name as class_name')
            ->leftJoin('classmanagements', 'subjectmanagements.class_id', '=', 'classmanagements.id');
    
        return Datatables::of($subjectsData)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;
                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('subjects', function ($data) {
                // If subjects is a plain string, just return it directly
                return $data->subjects;
            })
            ->editColumn('updated_at', function ($data) {
                $diff = Carbon::now()->diffInHours($data->updated_at);
                return $diff < 25 ? $data->updated_at->diffForHumans() : $data->updated_at->isoFormat('llll');
            })
            ->rawColumns(['class_name', 'subjects', 'action'])
            ->make(true);
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_name_singular = Str::singular($module_name);
        $module_action = 'Create';

        logUserAccess($module_title . ' ' . $module_action);

        // Fetch class data dynamically
        $classes = ClassManagement::pluck('name', 'id')->toArray();
        // dd($classes );
        return view(
            "{$module_path}.{$module_name}.create",
            compact(
                'module_title',
                'module_name',
                'module_path',
                'module_icon',
                'module_name_singular',
                'module_action',
                'classes' // ✅ Make sure this is included
            )
        );
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
        $classes = ClassManagement::pluck('name', 'id')->toArray();

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
                'classes' // ✅ Ensure classes is passed to the view
            )
        );
    }


    /**
     * Store a new resource in the database.
     */
    public function store(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_model = $this->module_model;

        // Validate input
        $request->validate([
            'class_id' => 'required|integer',
            'subjects' => 'required|string',
            'created_by' => 'nullable|integer',
        ]);

        // Prepare data for saving
        $postData = [
            'class_id' => $request->class_id,
            'subjects' => $request->subjects, // Encode subjects as JSON
            'created_by' => $request->created_by ?? auth()->id(),
            'updated_by' => $request->updated_by ?? auth()->id(),
        ];

        // Save to database
        $$module_name = $module_model::create($postData);

        flash(icon() . "New '" . Str::singular($module_title) . "' Added")->success()->important();

        return redirect("admin/{$module_name}");
    }

    /**
     * Update a resource.
     */
    public function update(Request $request, $id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_model = $this->module_model;

        // Validate input
        $request->validate([
            'class_id' => 'required|integer',
            'subjects' => 'required|string',
            'updated_by' => 'nullable|integer',
        ]);

        // Find the record
        $$module_name = $module_model::findOrFail($id);

        // Update values
        $$module_name->update([
            'class_id' => $request->class_id,
            'subjects' =>  $request->subjects, // Encode subjects as JSON
            'updated_by' => $request->updated_by ?? auth()->id(),
        ]);

        flash(icon() . "The '" . Str::singular($module_title) . "' Updated")->success()->important();

        return redirect("admin/{$module_name}");
    }



}
