#!/usr/bin/env php
<?php

/**
 * Convert existing lazy loading to Lozad format
 * - Change data-lazy to data-src
 * - Remove unnecessary src placeholders
 * - Remove lazy-loading class
 */

$viewsPath = dirname(__DIR__) . '/resources/views';

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($viewsPath, RecursiveDirectoryIterator::SKIP_DOTS)
);

$convertedFiles = 0;
$convertedImages = 0;

foreach ($iterator as $file) {
    if ($file->getExtension() !== 'php') {
        continue;
    }
    
    $filepath = $file->getPathname();
    $content = file_get_contents($filepath);
    $originalContent = $content;
    
    // Convert data-lazy to data-src
    $content = preg_replace('/data-lazy=/', 'data-src=', $content, -1, $count1);
    $convertedImages += $count1;
    
    // Convert data-lazy-srcset to data-srcset
    $content = preg_replace('/data-lazy-srcset=/', 'data-srcset=', $content, -1, $count2);
    
    // Remove lazy-loading class and replace with nothing (Lozad auto-detects)
    $content = preg_replace('/\s*lazy-loading\s*/', ' ', $content);
    
    // Remove unnecessary src placeholders from Lozad images
    $content = preg_replace(
        '/(<img[^>]*data-src[^>]*)\s+src\s*=\s*"data:image\/svg\+xml[^"]*"([^>]*>)/',
        '$1$2',
        $content
    );
    
    // Clean up extra spaces
    $content = preg_replace('/\s{2,}/', ' ', $content);
    $content = preg_replace('/\s+>/', '>', $content);
    
    if ($content !== $originalContent) {
        file_put_contents($filepath, $content);
        $convertedFiles++;
        
        $relativePath = str_replace($viewsPath . '/', '', $filepath);
        echo "✅ Converted: $relativePath\n";
    }
}

echo "\n🎉 Lozad Conversion Complete!\n";
echo "📁 Files converted: $convertedFiles\n";
echo "🖼️  Images converted: $convertedImages\n";

if ($convertedFiles === 0) {
    echo "✨ All images already use Lozad format!\n";
}