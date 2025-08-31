<?php

/**
 * Common Placeholder Fix Script
 * Systematically fixes the most common placeholder issues across all solution files
 */

class CommonPlaceholderFixer 
{
    private $basePath;
    private $solutions = [
        'education', 'finance-banking', 'government', 'healthcare', 
        'home-services', 'real-estate', 'retail-ecommerce', 'spa-massage'
    ];

    private $fixes = [
        // Common URL fixes
        '/demo/book' => '/contact-us?demo={industry}',
        
        // Common placeholder patterns
        'demo_booking' => '{industry}_demo_booking',
        '[demo-type-1]' => '{industry}_consultation',
        '[demo-type-2]' => '{industry}_booking', 
        '[demo-type-3]' => '{industry}_inquiry',
        '[demo-type-4]' => '{industry}_support',
        '[demo-type-5]' => '{industry}_followup',
        '[demo-type-6]' => '{industry}_premium',
        
        // Generic demo files
        '[feature1]-demo.mp4' => '{industry}-consultation-demo.mp4',
        '[feature2]-demo.mp4' => '{industry}-booking-demo.mp4', 
        '[feature3]-demo.mp4' => '{industry}-support-demo.mp4',
        '[demo1]-demo.mp3' => '{industry}-call-1-demo.mp3',
        '[demo2]-demo.mp3' => '{industry}-call-2-demo.mp3',
        '[demo3]-demo.mp3' => '{industry}-call-3-demo.mp3',
        '[demo4]-demo.mp3' => '{industry}-call-4-demo.mp3',
        '[demo5]-demo.mp3' => '{industry}-call-5-demo.mp3', 
        '[demo6]-demo.mp3' => '{industry}-call-6-demo.mp3',
        
        // Generic key points
        'Key point 1 demonstrated' => 'Professional {industry} expertise demonstrated',
        'Key point 2 demonstrated' => '24/7 {industry} availability shown',
        'Key point 3 demonstrated' => 'Instant {industry} response capability',
        'Key point 4 demonstrated' => 'Multilingual {industry} support',
        'Key point 5 demonstrated' => 'CRM integration and follow-up',
        
        // Generic descriptions
        'Sample transcript showing a realistic conversation between a potential client and the AI agent, demo' => 'Real conversation showing professional {industry} consultation with expert AI agent',
        'Detailed description of what happens in demo 1, showing AI expertise' => 'Professional {industry} consultation demonstrating AI expertise and industry knowledge',
        'Detailed description of what happens in demo 2, showing AI expertise' => '{industry} appointment booking with intelligent lead qualification',
        'Detailed description of what happens in demo 3, showing AI expertise' => 'Complex {industry} inquiry handled with professional expertise',
        'Detailed description of what happens in demo 4, showing AI expertise' => 'Premium {industry} service consultation with follow-up scheduling',
        'Detailed description of what happens in demo 5, showing AI expertise' => 'Advanced {industry} support showcasing AI capabilities',
        'Detailed description of what happens in demo 6, showing AI expertise' => 'Comprehensive {industry} service demonstration with CRM integration',
        
        // ROI calculator placeholders
        'Average [service] value (AED)' => 'Average {industry} service value (AED)',
        'Lead to [service] conversion rate (%)' => 'Lead to {industry} conversion rate (%)',
        
        // Business type placeholders
        '[Industry] [Service Type]' => '{industry} Service Provider'
    ];

    // Industry-specific replacements
    private $industryMappings = [
        'education' => [
            '{industry}' => 'education',
            '{industry}_consultation' => 'student_enrollment',
            '{industry}_booking' => 'course_registration',
            '{industry}_inquiry' => 'academic_inquiry',
            '{industry}_support' => 'student_support',
            '{industry}_followup' => 'enrollment_followup',
            '{industry}_premium' => 'premium_program'
        ],
        'finance-banking' => [
            '{industry}' => 'banking',
            '{industry}_consultation' => 'financial_consultation', 
            '{industry}_booking' => 'appointment_booking',
            '{industry}_inquiry' => 'banking_inquiry',
            '{industry}_support' => 'customer_service',
            '{industry}_followup' => 'loan_followup',
            '{industry}_premium' => 'investment_services'
        ],
        'healthcare' => [
            '{industry}' => 'healthcare',
            '{industry}_consultation' => 'medical_consultation',
            '{industry}_booking' => 'appointment_booking', 
            '{industry}_inquiry' => 'medical_inquiry',
            '{industry}_support' => 'patient_support',
            '{industry}_followup' => 'treatment_followup',
            '{industry}_premium' => 'specialist_referral'
        ],
        'real-estate' => [
            '{industry}' => 'realestate',
            '{industry}_consultation' => 'property_consultation',
            '{industry}_booking' => 'viewing_booking',
            '{industry}_inquiry' => 'property_inquiry', 
            '{industry}_support' => 'buyer_support',
            '{industry}_followup' => 'viewing_followup',
            '{industry}_premium' => 'luxury_property'
        ],
        'retail-ecommerce' => [
            '{industry}' => 'retail',
            '{industry}_consultation' => 'product_consultation',
            '{industry}_booking' => 'service_booking',
            '{industry}_inquiry' => 'product_inquiry',
            '{industry}_support' => 'customer_support',
            '{industry}_followup' => 'order_followup', 
            '{industry}_premium' => 'vip_service'
        ],
        'government' => [
            '{industry}' => 'government',
            '{industry}_consultation' => 'citizen_service',
            '{industry}_booking' => 'appointment_booking',
            '{industry}_inquiry' => 'public_inquiry',
            '{industry}_support' => 'citizen_support',
            '{industry}_followup' => 'service_followup',
            '{industry}_premium' => 'priority_service'
        ],
        'home-services' => [
            '{industry}' => 'homeservices', 
            '{industry}_consultation' => 'service_consultation',
            '{industry}_booking' => 'service_booking',
            '{industry}_inquiry' => 'home_inquiry',
            '{industry}_support' => 'customer_support',
            '{industry}_followup' => 'service_followup',
            '{industry}_premium' => 'premium_service'
        ],
        'spa-massage' => [
            '{industry}' => 'spa',
            '{industry}_consultation' => 'wellness_consultation',
            '{industry}_booking' => 'treatment_booking', 
            '{industry}_inquiry' => 'spa_inquiry',
            '{industry}_support' => 'wellness_support',
            '{industry}_followup' => 'treatment_followup',
            '{industry}_premium' => 'luxury_package'
        ]
    ];

    public function __construct()
    {
        $this->basePath = __DIR__ . '/../../resources/data/solutions/';
    }

    public function fixAllSolutions()
    {
        $totalFixed = 0;
        
        foreach ($this->solutions as $solution) {
            $fixedCount = $this->fixSolution($solution);
            $totalFixed += $fixedCount;
            if ($fixedCount > 0) {
                echo "{$solution}: {$fixedCount} fixes applied\n";
            }
        }
        
        if ($totalFixed > 0) {
            echo "Total: {$totalFixed} placeholders fixed\n";
        } else {
            echo "No fixes needed\n";
        }
    }

    private function fixSolution($solution)
    {
        $solutionPath = $this->basePath . $solution . '/';
        $fixedCount = 0;
        
        // Get industry mappings for this solution
        $industryMap = $this->industryMappings[$solution] ?? ['{industry}' => $solution];
        
        // Process each JSON file in the solution
        $files = glob($solutionPath . '*.json');
        
        foreach ($files as $filePath) {
            $content = file_get_contents($filePath);
            $originalContent = $content;
            
            // Apply common fixes
            foreach ($this->fixes as $search => $replace) {
                // Replace placeholders with industry-specific values
                $industryReplace = $replace;
                foreach ($industryMap as $placeholder => $value) {
                    $industryReplace = str_replace($placeholder, $value, $industryReplace);
                }
                
                $content = str_replace($search, $industryReplace, $content);
            }
            
            // Count fixes made
            $fileFixCount = substr_count($originalContent, '[') - substr_count($content, '[');
            $fileFixCount += ($originalContent !== $content ? 1 : 0);
            
            if ($content !== $originalContent) {
                file_put_contents($filePath, $content);
                $fixedCount += $fileFixCount;
            }
        }
        
        return $fixedCount;
    }
}

// Run the fixer
$fixer = new CommonPlaceholderFixer();
$fixer->fixAllSolutions();