#!/usr/bin/env php
<?php

/**
 * Fix missing properties found by the smart validator
 * Adds missing sections and properties that are used in blade files
 */

$basePath = dirname(__DIR__) . '/resources/data/solutions';

// Common section structures to add when missing
$defaultSections = [
    'section' => [
        'badge' => 'AI Solutions',
        'title' => 'Transform Your Business',
        'highlighted' => 'with AI',
        'description' => 'Experience the power of AI-driven automation in your industry.'
    ],
    'features' => [],
    'stats' => [],
    'dashboard' => [
        'title' => 'Real-Time Dashboard',
        'description' => 'Monitor your operations with comprehensive analytics.',
        'image' => '/assets/images/dashboard.jpg',
        'features' => []
    ],
    'consultation' => [
        'title' => 'Expert Consultation',
        'description' => 'Get professional insights tailored to your needs.',
        'image' => '/assets/images/consultation.jpg',
        'features' => []
    ],
    'testimonials' => [],
    'benefits' => [],
    'calculator' => [
        'inputs' => [],
        'calculations' => []
    ]
];

// Specific fixes based on validator output
$fixes = [
    'education' => [
        'features.json' => [
            'section' => $defaultSections['section'],
            'dashboard' => $defaultSections['dashboard'],
            'consultation' => $defaultSections['consultation'],
            'features' => $defaultSections['features'],
            'stats' => $defaultSections['stats']
        ],
        'hero.json' => [
            'section.key_benefits' => []
        ],
        'problems.json' => [
            'section' => $defaultSections['section']
        ],
        'roi-calculator.json' => [
            'section' => $defaultSections['section'],
            'calculator' => $defaultSections['calculator'],
            'benefits' => $defaultSections['benefits']
        ],
        'showcase.json' => [
            'section' => $defaultSections['section']
        ],
        'success-stories.json' => [
            'section' => $defaultSections['section'],
            'testimonials' => $defaultSections['testimonials'],
            'stats' => $defaultSections['stats']
        ],
        'voice-demos.json' => [
            'section.highlighted' => 'Voice Demonstrations',
            'section.description' => 'Listen to real conversations showing AI in action.'
        ]
    ]
];

$fixedCount = 0;

foreach ($fixes as $solution => $files) {
    echo "📁 Processing: {$solution}\n";
    
    foreach ($files as $filename => $properties) {
        $filePath = $basePath . '/' . $solution . '/' . $filename;
        
        if (!file_exists($filePath)) {
            echo "   ❌ File not found: {$filename}\n";
            continue;
        }
        
        $content = file_get_contents($filePath);
        $data = json_decode($content, true);
        
        if ($data === null) {
            echo "   ❌ Invalid JSON: {$filename}\n";
            continue;
        }
        
        $updated = false;
        
        foreach ($properties as $key => $value) {
            if (strpos($key, '.') !== false) {
                // Handle nested keys like "section.highlighted"
                $parts = explode('.', $key);
                $current = &$data;
                
                for ($i = 0; $i < count($parts) - 1; $i++) {
                    if (!isset($current[$parts[$i]])) {
                        $current[$parts[$i]] = [];
                    }
                    $current = &$current[$parts[$i]];
                }
                
                if (!isset($current[$parts[count($parts) - 1]])) {
                    $current[$parts[count($parts) - 1]] = $value;
                    $updated = true;
                }
            } else {
                // Handle direct keys
                if (!isset($data[$key])) {
                    $data[$key] = $value;
                    $updated = true;
                }
            }
        }
        
        if ($updated) {
            $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
            file_put_contents($filePath, $json . "\n");
            echo "   ✅ Fixed: {$filename}\n";
            $fixedCount++;
        } else {
            echo "   ⏭️  Skipped: {$filename} (no changes needed)\n";
        }
    }
    
    echo "\n";
}

echo "✅ Fixed {$fixedCount} files\n";
echo "\n💡 Run the validator again to see remaining issues:\n";
echo "   php scripts/validate-solutions.php\n";