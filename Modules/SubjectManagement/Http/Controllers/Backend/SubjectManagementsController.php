<?php

namespace Modules\SubjectManagement\Http\Controllers\Backend;

use App\Authorizable;
use Carbon\Carbon;

use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
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

        $$module_name = $module_model::select('id', 'title', 'description', 'image', 'status', 'order', 'updated_at');

        $data = $$module_name;

        return Datatables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('title', '{{$title}}')
            ->editColumn('image', function ($banner) {
                return $banner->image ? Storage::url('public/banners/' . $banner->image) : null;
            })
            ->editColumn('updated_at', function ($data) {
                $diff = Carbon::now()->diffInHours($data->updated_at);

                if ($diff < 25) {
                    return $data->updated_at->diffForHumans();
                }

                return $data->updated_at->isoFormat('llll');
            })
            ->rawColumns(['name', 'action'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }

    /**
     * Store a new resource in the database.
     */
    public function store(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_model = $this->module_model;

        $request->validate([
            'class_id' => 'required|integer',
            'subjects' => 'required|array',
            'subjects.*' => 'required|string|max:255',
            'created_by' => 'nullable|integer',
        ]);

        $postData = [
            'class_id' => $request->class_id,
            'subjects' => json_encode($request->subjects), // Encode subjects as JSON
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        ];

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

        $request->validate([
            'class_id' => 'required|integer',
            'subjects' => 'required|array',
            'subjects.*' => 'required|string|max:255',
            'updated_by' => 'nullable|integer',
        ]);

        $$module_name = $module_model::findOrFail($id);

        $$module_name->class_id = $request->class_id;
        $$module_name->subjects = json_encode($request->subjects); // Update subjects as JSON
        $$module_name->updated_by = $request->updated_by;

        $$module_name->save();

        flash(icon() . "The '" . Str::singular($module_title) . "' Updated")->success()->important();

        return redirect("admin/{$module_name}");
    }


}
