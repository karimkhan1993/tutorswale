<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BannerModel;

class BannerController extends Controller
{
    public function index()
    {
        $banners = BannerModel::where('status', true)
            ->orderBy('order')
            ->get();
            
        return view('frontend.home', compact('banners'));
    }
}
