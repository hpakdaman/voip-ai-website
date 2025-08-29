#!/usr/bin/env php
<?php

$basePath = dirname(__DIR__) . '/resources/data/solutions';
$solutions = ['education', 'finance-banking', 'government', 'healthcare', 'real-estate', 'retail-ecommerce', 'spa-massage'];

$fixedCount = 0;

foreach ($solutions as $solution) {
    $solutionPath = $basePath . '/' . $solution;
    $industryName = str_replace('-', '_', $solution);
    
    echo "📁 Processing: {$solution}\n";
    
    $files = glob($solutionPath . '/*.json');
    
    foreach ($files as $file) {
        $filename = basename($file);
        $content = file_get_contents($file);
        $data = json_decode($content, true);
        
        if ($data === null) {
            echo "   ❌ {$filename}: Invalid JSON\n";
            continue;
        }
        
        $needsUpdate = false;
        
        if (!isset($data['metadata'])) {
            $data['metadata'] = [
                'version' => '1.0',
                'last_updated' => date('Y-m-d'),
                'industry' => $industryName
            ];
            $needsUpdate = true;
        } elseif (!isset($data['metadata']['industry']) || $data['metadata']['industry'] !== $industryName) {
            $data['metadata']['industry'] = $industryName;
            $needsUpdate = true;
        }
        
        if ($needsUpdate) {
            $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
            file_put_contents($file, $json . "\n");
            echo "   ✅ {$filename}\n";
            $fixedCount++;
        }
    }
}

echo "\n✅ Fixed {$fixedCount} files\n";