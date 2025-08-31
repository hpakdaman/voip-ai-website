#!/usr/bin/env php
<?php

/**
 * Remove unused extra keys from home-services solution
 * Based on validator findings
 */

$basePath = dirname(dirname(__DIR__)) . '/resources/data/solutions';
$solution = 'home-services';

// Keys to remove based on validator findings
$keysToRemove = [
    'features.json' => ['features_grid', 'automation'],
    'problems.json' => ['market_data'],
    'roi-calculator.json' => ['calculator_inputs', 'cost_calculations', 'benefits_calculation', 'roi_scenarios', 'additional_benefits'],
    'showcase.json' => ['technology_showcase'],
    'success-stories.json' => ['case_studies', 'performance_metrics'],
    'voice-demos.json' => ['demo_categories', 'technical_features']
];

$cleanedCount = 0;

echo "🧹 Cleaning unused keys from: {$solution}\n\n";

foreach ($keysToRemove as $filename => $keys) {
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
    
    $removedKeys = [];
    
    foreach ($keys as $key) {
        if (isset($data[$key])) {
            unset($data[$key]);
            $removedKeys[] = $key;
        }
    }
    
    if (!empty($removedKeys)) {
        $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        file_put_contents($filePath, $json . "\n");
        echo "   ✅ {$filename}: Removed " . implode(', ', $removedKeys) . "\n";
        $cleanedCount++;
    } else {
        echo "   ⏭️  {$filename}: No keys to remove\n";
    }
}

echo "\n✅ Cleaned {$cleanedCount} files\n";
echo "\n🔄 Running validator to verify cleanup...\n\n";

// Run validator to check results
system('php ' . __DIR__ . '/validate-solutions.php 2>/dev/null');