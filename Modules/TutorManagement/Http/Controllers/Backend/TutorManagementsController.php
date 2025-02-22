<?php

namespace Modules\TutorManagement\Http\Controllers\Backend;

use App\Authorizable;
use Carbon\Carbon;

use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class TutorManagementsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'TutorManagements';

        // module name
        $this->module_name = 'tutormanagements';

        // directory path of the module
        $this->module_path = 'tutormanagement::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\TutorManagement\Models\TutorManagement";
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
        

        logUserAccess($module_title . ' ' . $module_action);
        // echo "hello";
        return view(
            "{$module_path}.{$module_name}.index_datatable",
            compact('module_title', 'module_name', "{$module_name}", 'module_icon', 'module_name_singular', 'module_action')
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
    
        // Fetch data with area and pincode
        $tutorsData = $module_model::select('id', 'full_name', 'area', 'pincode', 'updated_at');
    
        return Datatables::of($tutorsData)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;
                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('updated_at', function ($data) {
                $diff = Carbon::now()->diffInHours($data->updated_at);
                return $diff < 25 ? $data->updated_at->diffForHumans() : $data->updated_at->isoFormat('llll');
            })
            ->rawColumns(['full_name','area', 'pincode', 'action'])
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
        
        // dd($ );
        return view(
            "{$module_path}.{$module_name}.create",
            compact(
                'module_title',
                'module_name',
                'module_path',
                'module_icon',
                'module_name_singular',
                'module_action',
         // ✅ Make sure this is included
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
         // ✅ Ensure  is passed to the view
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
            'full_name'      => 'required|string|max:255',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'phone_number'   => 'required|string|max:20',
            'email'          => 'required|email|unique:tutormanagements,email',
            'password'       => 'required|string|min:6',
            'date_of_birth'  => 'required|date',
            'age'            => 'required|integer|min:0',
            'gender'         => 'required|in:Male,Female,Other',
            'street_address' => 'required|string|max:255',
            'area'           => 'required|string|max:255',  // ✅ Added 'area' validation
            'city'           => 'required|string|max:100',
            'pincode'        => 'required|string|max:10',  // ✅ Added 'pincode' validation
            'subject'        => 'required|string|max:255',
            'qualification'  => 'nullable|string',
            'experience'     => 'nullable|integer|min:0',
            'is_verified'    => 'required|in:Yes,No',
            'availability'   => 'required|in:Online,Offline',
            'status'         => 'required|in:Active,Inactive',
            'description'    => 'nullable|string',
        ]);

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/tutorimage', $imageName);
        }

        // Prepare data for saving
        $postData = [
            'full_name'      => $request->full_name,
            'profile_image' => $imageName ?? null,
            'phone_number'   => $request->phone_number,
            'email'          => $request->email,
            'password'       => bcrypt($request->password), // Encrypt password
            'date_of_birth'  => $request->date_of_birth,
            'age'            => $request->age,
            'gender'         => $request->gender,
            'street_address' => $request->street_address,
            'area'           => $request->area,  // ✅ Added 'area' field
            'city'           => $request->city,
            'pincode'        => $request->pincode,  // ✅ Added 'pincode' field
            'subject'        => $request->subject,
            'qualification'  => $request->qualification,
            'experience'     => $request->experience,
            'is_verified'    => $request->is_verified,
            'availability'   => $request->availability,
            'status'         => $request->status,
            'description'    => $request->description,
            'created_by'     => auth()->id(),
            'updated_by'     => auth()->id(),
        ];

        // Save to database
        $module_model::create($postData);

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
        'full_name'      => 'required|string|max:255',
        'profile_image' => 'image|mimes:jpeg,png,jpg|max:2048',
        'phone_number'   => 'required|string|max:20',
        'email'          => 'required|email|unique:tutormanagements,email,' . $id,
        'password'       => 'nullable|string|min:6',
        'date_of_birth'  => 'required|date',
        'age'            => 'required|integer|min:0',
        'gender'         => 'required|in:Male,Female,Other',
        'street_address' => 'required|string|max:255',
        'area'           => 'required|string|max:255',  // ✅ Added 'area' validation
        'city'           => 'required|string|max:100',
        'pincode'        => 'required|string|max:10',
        'subject'        => 'required|string|max:255',
        'qualification'  => 'nullable|string',
        'experience'     => 'nullable|integer|min:0',
        'is_verified'    => 'required|in:Yes,No',
        'availability'   => 'required|in:Online,Offline',
        'status'         => 'required|in:Active,Inactive',
        'description'    => 'nullable|string',
    ]);

    // Find the record
    $record = $module_model::findOrFail($id);

    // Prepare update data
    $updateData = [
        'full_name'      => $request->full_name,
        'phone_number'   => $request->phone_number,
        'email'          => $request->email,
        'date_of_birth'  => $request->date_of_birth,
        'age'            => $request->age,
        'gender'         => $request->gender,
        'street_address' => $request->street_address,
        'area'           => $request->area,  // ✅ Added 'area' field
        'city'           => $request->city,
        'pincode'        => $request->pincode, 
        'subject'        => $request->subject,
        'qualification'  => $request->qualification,
        'experience'     => $request->experience,
        'is_verified'    => $request->is_verified,
        'availability'   => $request->availability,
        'status'         => $request->status,
        'description'    => $request->description,
        'updated_by'     => auth()->id(),
    ];

    if ($request->hasFile('profile_image')) {
        $image = $request->file('profile_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/tutorimage', $imageName);

        if ($record->profile_image) {
            Storage::delete('public/tutorimage/' . $record->profile_image);
        }
        $updateData['profile_image'] = $imageName;
    }

    // Only update password if provided
    if ($request->filled('password')) {
        $updateData['password'] = bcrypt($request->password);
    }

    // Update the record
    $record->update($updateData);

    flash(icon() . "The '" . Str::singular($module_title) . "' Updated")->success()->important();

    return redirect("admin/{$module_name}");
    }


}
