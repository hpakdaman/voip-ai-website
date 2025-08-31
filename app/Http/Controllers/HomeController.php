<?php

namespace App\Http\Controllers;

use SEOMeta;
use OpenGraph;
use Twitter;
use JsonLd;

class HomeController extends Controller
{
    /**
     * VoIP AI Business Home Page
     */
    public function index()
    {
        // SEO Meta Tags
        SEOMeta::setTitle('Sawtic | AI Call Center Solutions UAE - Dubai Business');
        SEOMeta::setDescription('Leading AI call center solutions in UAE. Advanced virtual assistants, automated customer service, and intelligent communication technology for Dubai businesses.');
        SEOMeta::setCanonical('https://sawtic.com/');
        
        // Open Graph
        OpenGraph::setTitle('Sawtic | AI Call Center Solutions UAE');
        OpenGraph::setDescription('Advanced AI call center solutions for UAE businesses. Virtual assistants, automated customer service, and intelligent communication technology in Dubai.');
        OpenGraph::setUrl('https://sawtic.com/');
        OpenGraph::addImage('https://sawtic.com/assets/images/corporate/experience-wall.webp');
        
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

    /**
     * Spa & Massage AI Solutions Landing Page
     */
    public function spaMassage()
    {
        return view('solutions.spa-massage');  
    }

    /**
     * Healthcare AI Solutions Landing Page
     */
    public function healthcare()
    {
        return view('solutions.healthcare');  
    }

    /**
     * Finance & Banking AI Solutions Landing Page
     */
    public function financeBanking()
    {
        return view('solutions.finance-banking');  
    }

    /**
     * Retail & E-commerce AI Solutions Landing Page
     */
    public function retailEcommerce()
    {
        return view('solutions.retail-ecommerce');  
    }

    /**
     * Education AI Solutions Landing Page
     */
    public function education()
    {
        return view('solutions.education');  
    }

    /**
     * Government AI Solutions Landing Page
     */
    public function government()
    {
        return view('solutions.government');  
    }

    /**
     * Home Services AI Solutions Landing Page
     */
    public function homeServices()
    {
        return view('solutions.home-services');  
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