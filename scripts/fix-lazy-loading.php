#!/usr/bin/env php
<?php

/**
 * Fix Lazy Loading Issues - Add proper placeholder src to all lazy images
 */

$viewsPath = dirname(__DIR__) . '/resources/views';

// Transparent placeholder (40x40 for avatars, can be resized by CSS)
$placeholder = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBmaWxsPSJyZ2JhKDI0OCwgMjUwLCAyNTIsIDAuMSkiLz4KPHN2Zz4K';

// Find all Blade files with lazy loading
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($viewsPath, RecursiveDirectoryIterator::SKIP_DOTS)
);

$fixedFiles = 0;
$fixedImages = 0;

foreach ($iterator as $file) {
    if ($file->getExtension() !== 'php') {
        continue;
    }
    
    $filepath = $file->getPathname();
    $content = file_get_contents($filepath);
    
    // Pattern to match lazy loading images without src attribute or with empty src
    $pattern = '/<img([^>]*data-lazy[^>]*?)(?:\s+src\s*=\s*"[^"]*")?([^>]*?)>/';
    
    $newContent = preg_replace_callback($pattern, function($matches) use ($placeholder, &$fixedImages) {
        $beforeDataLazy = $matches[1];
        $afterDataLazy = $matches[2];
        
        // Check if src already exists and is not empty
        if (preg_match('/\ssrc\s*=\s*"([^"]+)"/', $beforeDataLazy . $afterDataLazy, $srcMatch)) {
            // Skip if it already has a proper placeholder or data URL
            if (strpos($srcMatch[1], 'data:image') === 0) {
                return $matches[0]; // No change needed
            }
        }
        
        $fixedImages++;
        
        // Remove any existing src attribute
        $cleanBefore = preg_replace('/\s+src\s*=\s*"[^"]*"/', '', $beforeDataLazy);
        $cleanAfter = preg_replace('/\s+src\s*=\s*"[^"]*"/', '', $afterDataLazy);
        
        // Add the transparent placeholder
        return '<img' . $cleanBefore . ' src="' . $placeholder . '"' . $cleanAfter . '>';
        
    }, $content);
    
    if ($newContent !== $content) {
        file_put_contents($filepath, $newContent);
        $fixedFiles++;
        
        echo "✅ Fixed: " . str_replace($viewsPath . '/', '', $filepath) . "\n";
    }
}

echo "\n🎉 Lazy Loading Fix Complete!\n";
echo "📁 Fixed files: {$fixedFiles}\n";
echo "🖼️  Fixed images: {$fixedImages}\n";

if ($fixedFiles === 0) {
    echo "✨ All lazy loading images already have proper placeholders!\n";
}