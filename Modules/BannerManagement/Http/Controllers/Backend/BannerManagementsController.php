<?php

namespace Modules\BannerManagement\Http\Controllers\Backend;

use App\Authorizable;
use Carbon\Carbon;
use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class BannerManagementsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Banner';

        // module name
        $this->module_name = 'bannermanagements';

        // directory path of the module
        $this->module_path = 'bannermanagement::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\BannerManagement\Models\BannerManagement";
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
                // Return the full URL for the image
                return $banner->image ? Storage::url('public/banners/' . $banner->image) : null;
            })
            ->editColumn('updated_at', function ($data) {
                $module_name = $this->module_name;

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
     *
     * @param  Request  $request  The request object containing the data to be stored.
     * @return RedirectResponse The response object that redirects to the index page of the module.
     *
     * @throws Exception If there is an error during the creation of the resource.
     */
    public function store(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'link' => 'required|string',
            'status' => 'required|integer',
            'order' => 'required|integer|min:1'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/banners', $imageName);
        }

        $postData = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName ?? null,
            'link' => $request->link ?? null,
            'status' => $request->status,
            'order' => $request->order
        ];

        $module_action = 'Store';

        $$module_name_singular = $module_model::create($postData);

        flash(icon() . "New '" . Str::singular($module_title) . "' Added")->success()->important();

        logUserAccess($module_title . ' ' . $module_action . ' | Id: ' . $$module_name_singular->id);

        return redirect("admin/{$module_name}");
    }

    /**
     * Updates a resource.
     *
     * @param  int  $id
     * @param  Request  $request  The request object.
     * @param  mixed  $id  The ID of the resource to update.
     * @return Response
     * @return RedirectResponse The redirect response.
     *
     * @throws ModelNotFoundException If the resource is not found.
     */
    public function update(Request $request, $id) {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'link' => 'required|string',
            'status' => 'required|integer',
            'order' => 'required|integer|min:1'
        ]);

        $module_action = 'Update';

        $$module_name_singular = $module_model::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/banners', $imageName);

            if ($$module_name_singular->image) {
                Storage::delete('public/banners/' . $$module_name_singular->image);
            }

            $$module_name_singular->image = $imageName;
        }

        $$module_name_singular->title = $request->title;
        $$module_name_singular->description = $request->description;
        $$module_name_singular->link = $request->link;
        $$module_name_singular->status = $request->status;
        $$module_name_singular->order = $request->order;

        $$module_name_singular->save();

        flash(icon() . "The '" . Str::singular($module_title) . "' Updated")->success()->important();

        logUserAccess($module_title . ' ' . $module_action . ' | Id: ' . $$module_name_singular->id);

        return redirect("admin/{$module_name}");
    }

}
