<?php

namespace Modules\TutorHiring\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use Modules\TutorHiring\Models\TutorHiring;
use Illuminate\Support\Str;

class TutorHiringsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'TutorHirings';

        // Module name
        $this->module_name = 'tutorhirings';

        // Directory path of the module
        $this->module_path = 'tutorhiring::backend';

        // Module icon
        $this->module_icon = 'fa-regular fa-sun';

        // Module model name, path
        $this->module_model = TutorHiring::class;
    }

    public function index_data()
    {
        $module_model = $this->module_model;

        $data = $module_model::select('id', 'heading', 'description', 'image', 'updated_at');

        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;
                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('image', function ($tutorhiring) {
                return $tutorhiring->image ? Storage::url('public/tutorhirings/' . $tutorhiring->image) : null;
            })
            ->editColumn('updated_at', function ($data) {
                $diff = Carbon::now()->diffInHours($data->updated_at);
                return $diff < 25 ? $data->updated_at->diffForHumans() : $data->updated_at->isoFormat('llll');
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/tutorhirings', $imageName);
        }

        $postData = [
            'heading' => $request->heading,
            'description' => $request->description,
            'image' => $imageName ?? null,
        ];

        $tutorhiring = $this->module_model::create($postData);

        flash(icon() . "New Tutor Hiring Added")->success()->important();
        logUserAccess("Tutor Hiring Store | Id: " . $tutorhiring->id);

        return redirect("admin/tutorhirings");
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $tutorhiring = $this->module_model::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/tutorhirings', $imageName);

            if ($tutorhiring->image) {
                Storage::delete('public/tutorhirings/' . $tutorhiring->image);
            }

            $tutorhiring->image = $imageName;
        }

        $tutorhiring->heading = $request->heading;
        $tutorhiring->description = $request->description;
        $tutorhiring->save();

        flash(icon() . "Tutor Hiring Updated")->success()->important();
        logUserAccess("Tutor Hiring Update | Id: " . $tutorhiring->id);

        return redirect("admin/tutorhirings");
    }
}
