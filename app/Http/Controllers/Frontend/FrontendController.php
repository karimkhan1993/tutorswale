<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Home';
        // module model name, path
        $this->module_model = "Modules\BannerManagement\Models\BannerManagement";
        $this->testimonial_model = "Modules\Testimonial\Models\Testimonial";
        $this->faq_model = "Modules\FAQ\Models\FAQ";
    }
    /**
     * Retrieves the view for the index page of the frontend.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $banners =  $this->module_model::select(
            'id', 
            'title', 
            'description', 
            'image',
            'link'
            )->where(['status'=>1])->get();

        $testimonials =  $this->testimonial_model::select(
            'id', 
            'name', 
            'description', 
            'profession'
            )->where(['status'=>1])->get();

            $faqs =  $this->faq_model::select(
                'id',
                'title',
                'description'
                )->where(['status'=>1])->get();

        return view('frontend.index', compact('banners', 'testimonials', 'faqs'));
    }

    /**
     * About Us.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function aboutUs()
    {
        return view('frontend.about');
    }

    public function contactUs()
    {
        return view('frontend.contact');
    }

    public function tutorSection()
    {
        return view('frontend.tutorsection');
    }

    public function registrationView()
    {
        return view('frontend.registration');
    }
}
