<?php

namespace Modules\ExclusiveClass\Http\Controllers\Backend;

use App\Authorizable;
use Carbon\Carbon;

use App\Http\Controllers\Backend\BackendBaseController;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

use Modules\ClassManagement\Models\ClassManagement;
use Modules\SubjectManagement\Models\SubjectManagement;

class ExclusiveClassesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'ExclusiveClasses';

        // module name
        $this->module_name = 'exclusiveclasses';

        // directory path of the module
        $this->module_path = 'exclusiveclass::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\ExclusiveClass\Models\ExclusiveClass";
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
        $subject = SubjectManagement::pluck('subjects', 'id')->toArray();

        logUserAccess($module_title . ' ' . $module_action);
        // echo "hello";
        return view(
            "{$module_path}.{$module_name}.index_datatable",
            compact('module_title', 'module_name', "{$module_name}", 'module_icon', 'module_name_singular', 'module_action', 'classes','subject')
        );
    }


    public function index_data()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_model = $this->module_model;
    
        // Fetch data with class names
        $dataQuery = $module_model::select(
                'exclusiveclasses.id', 
                'exclusiveclasses.description',
                'classmanagements.name as class_name',
                'subjectmanagements.subjects as subject_name',
                'exclusiveclasses.status',
                'exclusiveclasses.session_date',
                'exclusiveclasses.updated_at'
            )
            ->leftJoin('classmanagements', 'exclusiveclasses.class_id', '=', 'classmanagements.id')
            ->leftJoin('subjectmanagements', 'exclusiveclasses.subject_id', '=', 'subjectmanagements.id');
    
        return Datatables::of($dataQuery)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;
                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('subject_name', function ($data) {
                return is_array($data->subject_name) ? implode(', ', $data->subject_name) : $data->subject_name;
            })
            ->editColumn('updated_at', function ($data) {
                return Carbon::now()->diffInHours($data->updated_at) < 25 
                    ? $data->updated_at->diffForHumans() 
                    : $data->updated_at->isoFormat('llll');
            })
            ->rawColumns(['description','class_name', 'subject_name', 'action'])
            ->make(true);
    }    
    
    public function getSubjectsByClass(Request $request)
    {
        $classId = $request->class_id;

        // Fetch subjects based on class_id
        $subjects = SubjectManagement::where('class_id', $classId)->pluck('subjects', 'id');

        return response()->json(['subjects' => $subjects]);
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

        // ✅ Validate input (including new fields session_date and location)
        $request->validate([
            'class_id'    => 'required|integer',
            'subject_id'  => 'required|integer', // ✅ Match form field name
            'description' => 'nullable|string',  // ✅ Corrected type
            'status'      => 'nullable|integer',
            'session_date' => 'nullable|date',  // ✅ Validate session_date as date
            'location'    => 'nullable|string|max:255', // ✅ Validate location as a string
        ]);

        // ✅ Prepare data for saving (including new fields session_date and location)
        $postData = [
            'class_id'    => $request->class_id,
            'subject_id'  => $request->subject_id, // ✅ Match form
            'description' => $request->description,
            'status'      => $request->status ?? 1, // Default to active
            'session_date'=> $request->session_date, // ✅ Add session_date
            'location'    => $request->location,   // ✅ Add location
            'created_by'  => $request->created_by ?? auth()->id(),
            'updated_by'  => $request->updated_by ?? auth()->id(),
        ];

        // ✅ Save to database
        $module_model::create($postData);

        // ✅ Flash success message
        flash(icon() . " New '" . Str::singular($module_title) . "' Added")->success()->important();

        // ✅ Redirect to listing page
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

        // ✅ Validate input (including new fields session_date and location)
        $request->validate([
            'class_id'    => 'required|integer',
            'subject_id'  => 'required|integer', // ✅ Match form field name
            'description' => 'nullable|string',  // ✅ Corrected type
            'status'      => 'nullable|integer',
            'session_date' => 'nullable|date',  // ✅ Validate session_date as date
            'location'    => 'nullable|string|max:255', // ✅ Validate location as a string
        ]);

        // Find the record
        $$module_name = $module_model::findOrFail($id);

        // Update values (including new fields session_date and location)
        $$module_name->update([
            'class_id'    => $request->class_id,
            'subject_id'  => $request->subject_id, // ✅ Match form
            'description' => $request->description,
            'status'      => $request->status ?? 1, // Default to active
            'session_date'=> $request->session_date, // ✅ Add session_date
            'location'    => $request->location,   // ✅ Add location
            'updated_by'  => $request->updated_by ?? auth()->id(),
        ]);

        flash(icon() . "The '" . Str::singular($module_title) . "' Updated")->success()->important();

        return redirect("admin/{$module_name}");
    }

}
