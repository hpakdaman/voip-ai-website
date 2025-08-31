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
        // SEO Meta Tags
        SEOMeta::setTitle('Sawtic | Advanced AI Call Center Features & Capabilities');
        SEOMeta::setDescription('Explore Sawtic\'s advanced AI call center features: intelligent automation, multi-language support, real-time analytics, CRM integration, and enterprise security for Dubai businesses.');
        SEOMeta::setCanonical('https://sawtic.com/features');
        
        // Open Graph
        OpenGraph::setTitle('Advanced AI Call Center Features - Sawtic UAE');
        OpenGraph::setDescription('Discover cutting-edge AI call center features: automated customer service, intelligent routing, real-time analytics, and enterprise-grade security solutions.');
        OpenGraph::setUrl('https://sawtic.com/features');
        
        return view('features');  
    }

    /**
     * VoIP Pricing Page
     */
    public function pricing()
    {
        // SEO Meta Tags
        SEOMeta::setTitle('Sawtic | AI Call Center Pricing Plans - UAE Business Solutions');
        SEOMeta::setDescription('Transparent AI call center pricing for UAE businesses. Choose from Starter, Professional, or Enterprise plans with 24/7 support, multi-language AI agents, and Dubai-based infrastructure.');
        SEOMeta::setCanonical('https://sawtic.com/pricing');
        
        // Open Graph
        OpenGraph::setTitle('AI Call Center Pricing Plans - Sawtic UAE');
        OpenGraph::setDescription('Flexible pricing for AI call center solutions in Dubai. Starter plans from AED 99/month with enterprise-grade features and local UAE support.');
        OpenGraph::setUrl('https://sawtic.com/pricing');
        
        return view('pricing');  
    }

    /**
     * About VoIP AI Business
     */
    public function about()
    {
        // SEO Meta Tags
        SEOMeta::setTitle('Sawtic | About Us - Leading AI Call Center Provider in Dubai');
        SEOMeta::setDescription('Learn about Sawtic, Dubai\'s premier AI call center provider. Founded with UAE vision 2071 goals, serving MENA region with cutting-edge AI communication solutions since 2020.');
        SEOMeta::setCanonical('https://sawtic.com/about');
        
        // Open Graph
        OpenGraph::setTitle('About Sawtic - AI Call Center Innovation in Dubai');
        OpenGraph::setDescription('Discover Sawtic\'s journey as Dubai\'s leading AI call center provider. UAE-based team, DIFC headquarters, and commitment to AI innovation for Middle East businesses.');
        OpenGraph::setUrl('https://sawtic.com/about');
        
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