<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BannerModel;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = BannerModel::orderBy('order')->get();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'boolean',
            'order' => 'required|integer|min:1'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/banners', $imageName);
        }

        BannerModel::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName ?? null,
            'status' => $request->status ?? false,
            'order' => $request->order
        ]);

        return redirect()->route('admin.banners.index')
            ->with('success', 'Banner created successfully');
    }

    public function edit(BannerModel $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, BannerModel $banner)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'boolean',
            'order' => 'required|integer|min:1'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($banner->image) {
                Storage::delete('public/banners/' . $banner->image);
            }
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/banners', $imageName);
            $banner->image = $imageName;
        }

        $banner->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status ?? false,
            'order' => $request->order
        ]);

        return redirect()->route('admin.banners.index')
            ->with('success', 'Banner updated successfully');
    }

    public function destroy(BannerModel $banner)
    {
        if ($banner->image) {
            Storage::delete('public/banners/' . $banner->image);
        }
        
        $banner->delete();
        return redirect()->route('admin.banners.index')
            ->with('success', 'Banner deleted successfully');
    }

    public function updateOrder(Request $request)
    {
        foreach ($request->order as $id => $order) {
            BannerModel::where('id', $id)->update(['order' => $order]);
        }
        
        return response()->json(['success' => true]);
    }
}
