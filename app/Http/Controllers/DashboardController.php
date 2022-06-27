<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //to get the home and index page
    public function index(){
        
        return view('index');
    }

    //to get the case study page
    public function case_study(){
    	return view('case-studies');
    }

    //to get the detail page for case study
    public function view_case_study(){
    	return view('view-case-study');
    }

    //to get the pricing page
    public function pricing(){
    	return view('pricing');
    }

    //to get the contact us page
    public function contact_us(){
    	return view('contact-us');
    }

    //to get the about us page
    public function about_us(){
    	return view('about-us');
    }

    //to get privacy page
    public function privacy_policy(){
    	return view('privacy-policy');
    }

    //to get terms and conditions page
    public function terms(){
    	return view('terms');
    }

    //to get terms and conditions page
    public function faq(){
    	return view('faq');
    }

    //to get healthcare page
    public function healthcare(){
    	return view('healthcare');
    }
}
