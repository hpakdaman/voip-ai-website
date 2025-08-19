<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    /**
     * VoIP AI Business Home Page
     */
    public function index()
    {
        return view('index');  
    }

    /**
     * VoIP Features Page
     */
    public function features()
    {
        return view('features');  
    }

    /**
     * VoIP Pricing Page
     */
    public function pricing()
    {
        return view('pricing');  
    }

    /**
     * About VoIP AI Business
     */
    public function about()
    {
        return view('about');  
    }

    /**
     * Privacy Policy
     */
    public function privacy()
    {
        return view('privacy');  
    }

    /**
     * Terms of Service
     */
    public function terms()
    {
        return view('terms');  
    }

    /**
     * Privacy Rights Portal
     */
    public function privacyPortal()
    {
        return view('privacy-portal');  
    }

    /**
     * Real Estate AI Solutions Landing Page
     */
    public function realEstate()
    {
        return view('solutions.real-estate');  
    }

    // Additional VoIP methods (add as needed):
    
    /*
    public function integrations()
    {
        return view('integrations');
    }

    public function caseStudies()
    {
        return view('case-studies');
    }

    public function support()
    {
        return view('support');
    }

    public function demo()
    {
        return view('demo');
    }
    */
}