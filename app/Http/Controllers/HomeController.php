<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Slider;
use App\Portfolio;
use App\Testimonial;
use App\Service;
use App\About;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $staffs          = Staff::all();
        $sliders         = Slider::all();
        $testimonials    = Testimonial::all();
        $portfolio       = Portfolio::all();
        $service         = Service::all(); 
         $abouts         = About::latest()->first();
        // dd();
        return view('home',[
            'testimonials' => $testimonials,
            'portfolios'=> $portfolio,
            'services'  => $service,
            'staffs'  => $staffs,
            'abouts'=>$abouts,
            'sliders' => $sliders
        ]);
    }

    public function AboutUs(){
        
        $about = About::all();
        // dd($about);
        return view('about-us',[
            'abouts'=>$about
        ]);
    }

    public function getServices(){
        $service = Service::all();

        return view('services',[
            'services'=> $service
        ]);
    }

    public function ContactUs(){
        return view('contact-us');
    }
}