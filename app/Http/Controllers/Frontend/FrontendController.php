<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact; // Import the Contact model

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
        $this->ExclusiveClass = "Modules\ExclusiveClass\Models\ExclusiveClass";
        $this->Setting = "App\Models\Setting";
        $this->TutorHiring = "Modules\TutorHiring\Models\TutorHiring";

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

        $ExclusiveClass = $this->ExclusiveClass::select(
            'exclusiveclasses.description',
            'classmanagements.name as class_name',
            'subjectmanagements.subjects as subject_name',
            'exclusiveclasses.location',
            'exclusiveclasses.session_date',
        )
        ->leftJoin('classmanagements', 'exclusiveclasses.class_id', '=', 'classmanagements.id')
        ->leftJoin('subjectmanagements', 'exclusiveclasses.subject_id', '=', 'subjectmanagements.id')
        ->where('exclusiveclasses.status', 1) // Add where status = 1
        ->orderBy('exclusiveclasses.id', 'desc') // Order by ID in descending order
        ->limit(4) // Limit to 4 records
        ->get(); // Fetch results

        $tutorhiring = $this->TutorHiring::get();

        return view('frontend.index', compact('banners', 'testimonials', 'faqs', 'ExclusiveClass','tutorhiring'));
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

    public function saveContact(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'message' => 'required|string|max:500',
        ]);

        // Save the contact details in the database
        Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'subject' => $request->subject??"", // <-- Add this line
            'message' => $request->message,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
