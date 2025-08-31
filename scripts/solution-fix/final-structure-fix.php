#!/usr/bin/env php
<?php

/**
 * Final comprehensive fix for all solution structure issues
 * Based on smart validator results and blade file usage
 */

$basePath = dirname(dirname(__DIR__)) . '/resources/data/solutions';

// Read the sample files to get correct structures
function getSampleStructure($filename) {
    global $basePath;
    $sampleFile = $basePath . '/sample/' . $filename;
    if (file_exists($sampleFile)) {
        return json_decode(file_get_contents($sampleFile), true);
    }
    return null;
}

// Apply specific fixes for each solution
$fixes = [
    'education' => [
        'voice-demos.json' => function(&$data) {
            // Move voice_samples to demos to match sample structure
            if (isset($data['voice_samples']) && !isset($data['demos'])) {
                $data['demos'] = $data['voice_samples'];
                unset($data['voice_samples']);
            }
        }
    ],
    'finance-banking' => [
        'roi-calculator.json' => function(&$data) {
            // Move benefits_summary to benefits to match expected structure
            if (isset($data['benefits_summary']) && !isset($data['benefits'])) {
                $data['benefits'] = $data['benefits_summary'];
                unset($data['benefits_summary']);
            }
        },
        'voice-demos.json' => function(&$data) {
            // Convert voice_demos to demos structure
            if (isset($data['voice_demos']) && !isset($data['demos'])) {
                $data['demos'] = $data['voice_demos'];
                unset($data['voice_demos']);
            }
        }
    ],
    'healthcare' => [
        'voice-demos.json' => function(&$data) {
            // Move voice_samples to demos
            if (isset($data['voice_samples']) && !isset($data['demos'])) {
                $data['demos'] = $data['voice_samples'];
                unset($data['voice_samples']);
            }
        }
    ],
    'retail-ecommerce' => [
        'voice-demos.json' => function(&$data) {
            // Convert voice_demos to demos structure
            if (isset($data['voice_demos']) && !isset($data['demos'])) {
                $data['demos'] = $data['voice_demos'];
                unset($data['voice_demos']);
            }
        }
    ],
    'spa-massage' => [
        'voice-demos.json' => function(&$data) {
            // Convert voice_demos to demos structure  
            if (isset($data['voice_demos']) && !isset($data['demos'])) {
                $data['demos'] = $data['voice_demos'];
                unset($data['voice_demos']);
            }
        }
    ]
];

$fixedCount = 0;

foreach ($fixes as $solution => $files) {
    echo "📁 Processing: {$solution}\n";
    
    foreach ($files as $filename => $fixFunction) {
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
        
        // Create backup of original data
        $originalData = $data;
        
        // Apply the fix function
        $fixFunction($data);
        
        // Check if data was modified
        if ($data !== $originalData) {
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
echo "\n💡 Run the validator to check final results:\n";
echo "   php scripts/validate-solutions.php\n";