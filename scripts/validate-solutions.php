#!/usr/bin/env php
<?php

/**
 * Sawtic Solutions Structure Validator
 * Compares all solution folders against the sample folder structure
 * Reports missing files, extra files, and JSON structure differences
 */

class SolutionsStructureValidator
{
    private $basePath;
    private $samplePath;
    private $requiredFiles = [
        'capabilities.json',
        'cta.json',
        'features.json',
        'hero.json',
        'problems.json',
        'roi-calculator.json',
        'showcase.json',
        'success-stories.json',
        'voice-demos.json'
    ];
    
    private $report = [];
    private $hasErrors = false;
    
    public function __construct()
    {
        $this->basePath = dirname(__DIR__) . '/resources/data/solutions';
        $this->samplePath = $this->basePath . '/sample';
        
        if (!is_dir($this->samplePath)) {
            die("❌ Sample folder not found at: {$this->samplePath}\n");
        }
    }
    
    public function run()
    {
        echo "\n";
        echo "🔍 Sawtic Solutions Structure Validator\n";
        echo "========================================\n\n";
        
        // Get all solution folders
        $solutions = $this->getSolutionFolders();
        
        if (empty($solutions)) {
            echo "❌ No solution folders found!\n";
            return;
        }
        
        echo "📁 Found " . count($solutions) . " solution folders to validate\n\n";
        
        // Load sample structure
        $sampleStructure = $this->loadFolderStructure($this->samplePath);
        
        // Validate each solution
        foreach ($solutions as $solution) {
            $this->validateSolution($solution, $sampleStructure);
        }
        
        // Print summary report
        $this->printReport();
    }
    
    private function getSolutionFolders()
    {
        $folders = [];
        $items = scandir($this->basePath);
        
        foreach ($items as $item) {
            if ($item === '.' || $item === '..' || $item === 'sample') {
                continue;
            }
            
            $path = $this->basePath . '/' . $item;
            if (is_dir($path)) {
                $folders[] = $item;
            }
        }
        
        sort($folders);
        return $folders;
    }
    
    private function loadFolderStructure($path)
    {
        $structure = [
            'files' => [],
            'content' => []
        ];
        
        foreach ($this->requiredFiles as $file) {
            $filePath = $path . '/' . $file;
            if (file_exists($filePath)) {
                $structure['files'][] = $file;
                $content = file_get_contents($filePath);
                $json = json_decode($content, true);
                
                if ($json !== null) {
                    $structure['content'][$file] = $this->getJsonStructure($json);
                } else {
                    $structure['content'][$file] = ['error' => 'Invalid JSON'];
                }
            }
        }
        
        return $structure;
    }
    
    private function getJsonStructure($data, $depth = 0)
    {
        if ($depth > 3) { // Limit depth to avoid too much detail
            return is_array($data) ? 'array[' . count($data) . ']' : gettype($data);
        }
        
        if (!is_array($data)) {
            return gettype($data);
        }
        
        $structure = [];
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                if ($this->isSequentialArray($value)) {
                    $structure[$key] = 'array[' . count($value) . ']';
                } else {
                    $structure[$key] = $this->getJsonStructure($value, $depth + 1);
                }
            } else {
                $structure[$key] = gettype($value);
            }
        }
        
        return $structure;
    }
    
    private function isSequentialArray($array)
    {
        if (!is_array($array)) return false;
        return array_keys($array) === range(0, count($array) - 1);
    }
    
    private function validateSolution($solution, $sampleStructure)
    {
        $solutionPath = $this->basePath . '/' . $solution;
        $this->report[$solution] = [
            'status' => '✅',
            'missing_files' => [],
            'extra_files' => [],
            'structure_differences' => [],
            'content_issues' => []
        ];
        
        echo "📋 Validating: \033[1;34m{$solution}\033[0m\n";
        
        // Check for missing files
        foreach ($this->requiredFiles as $file) {
            $filePath = $solutionPath . '/' . $file;
            if (!file_exists($filePath)) {
                $this->report[$solution]['missing_files'][] = $file;
                $this->report[$solution]['status'] = '❌';
                $this->hasErrors = true;
                echo "   ❌ Missing: {$file}\n";
            }
        }
        
        // Check for extra files
        $actualFiles = scandir($solutionPath);
        foreach ($actualFiles as $file) {
            if ($file === '.' || $file === '..' || !str_ends_with($file, '.json')) {
                continue;
            }
            
            if (!in_array($file, $this->requiredFiles)) {
                $this->report[$solution]['extra_files'][] = $file;
                echo "   ➕ Extra file: {$file}\n";
            }
        }
        
        // Validate JSON structure for existing files
        foreach ($this->requiredFiles as $file) {
            $filePath = $solutionPath . '/' . $file;
            if (!file_exists($filePath)) {
                continue;
            }
            
            $content = file_get_contents($filePath);
            $json = json_decode($content, true);
            
            if ($json === null) {
                $this->report[$solution]['content_issues'][$file] = 'Invalid JSON: ' . json_last_error_msg();
                $this->report[$solution]['status'] = '⚠️';
                echo "   ⚠️  {$file}: Invalid JSON\n";
                continue;
            }
            
            // Check for placeholder content (still has [industry] placeholders)
            $contentStr = json_encode($json);
            if (preg_match('/\[(industry|capability|metric|feature|problem|solution)\]/', $contentStr)) {
                $this->report[$solution]['content_issues'][$file] = 'Contains placeholder text';
                $this->report[$solution]['status'] = '⚠️';
                echo "   ⚠️  {$file}: Contains placeholders\n";
            }
            
            // Compare structure with sample
            $currentStructure = $this->getJsonStructure($json);
            $sampleFileStructure = $sampleStructure['content'][$file] ?? [];
            
            $diff = $this->compareStructures($sampleFileStructure, $currentStructure);
            if (!empty($diff)) {
                $this->report[$solution]['structure_differences'][$file] = $diff;
                $this->report[$solution]['status'] = '⚠️';
                echo "   ⚠️  {$file}: Structure differs from sample\n";
            }
            
            // Check metadata
            if (isset($json['metadata']) && isset($json['metadata']['industry'])) {
                $expectedIndustry = str_replace('-', '_', $solution);
                $actualIndustry = $json['metadata']['industry'];
                
                if ($actualIndustry !== $expectedIndustry && $actualIndustry !== str_replace('_', '-', $expectedIndustry)) {
                    $this->report[$solution]['content_issues'][$file] = 
                        "Metadata industry mismatch: '{$actualIndustry}' should be '{$expectedIndustry}'";
                    $this->report[$solution]['status'] = '⚠️';
                    echo "   ⚠️  {$file}: Metadata industry mismatch\n";
                }
            } elseif (isset($json['metadata']) && !isset($json['metadata']['industry'])) {
                $this->report[$solution]['content_issues'][$file] = 
                    "Metadata missing 'industry' field";
                $this->report[$solution]['status'] = '⚠️';
                echo "   ⚠️  {$file}: Missing metadata.industry field\n";
            }
        }
        
        if ($this->report[$solution]['status'] === '✅') {
            echo "   ✅ All validations passed!\n";
        }
        
        echo "\n";
    }
    
    private function compareStructures($expected, $actual, $path = '')
    {
        $differences = [];
        
        // Check for missing keys
        foreach ($expected as $key => $value) {
            $currentPath = $path ? "{$path}.{$key}" : $key;
            
            if (!array_key_exists($key, $actual)) {
                $differences[] = "Missing key: {$currentPath}";
            } elseif (is_array($value) && !is_string($value) && !is_string($actual[$key])) {
                // Recursively compare nested structures
                $nestedDiff = $this->compareStructures($value, $actual[$key], $currentPath);
                $differences = array_merge($differences, $nestedDiff);
            }
        }
        
        // Check for extra keys (only at top level to avoid noise)
        if ($path === '') {
            foreach ($actual as $key => $value) {
                if (!array_key_exists($key, $expected)) {
                    $differences[] = "Extra key: {$key}";
                }
            }
        }
        
        return $differences;
    }
    
    private function printReport()
    {
        echo "📊 VALIDATION SUMMARY\n";
        echo "====================\n\n";
        
        $perfectCount = 0;
        $warningCount = 0;
        $errorCount = 0;
        
        foreach ($this->report as $solution => $data) {
            if ($data['status'] === '✅') {
                $perfectCount++;
            } elseif ($data['status'] === '⚠️') {
                $warningCount++;
            } else {
                $errorCount++;
            }
        }
        
        echo "✅ Perfect: {$perfectCount} solutions\n";
        echo "⚠️  Warnings: {$warningCount} solutions\n";
        echo "❌ Errors: {$errorCount} solutions\n\n";
        
        // Detailed issues
        if ($this->hasErrors || $warningCount > 0) {
            echo "📋 DETAILED ISSUES\n";
            echo "==================\n\n";
            
            foreach ($this->report as $solution => $data) {
                if ($data['status'] === '✅') {
                    continue;
                }
                
                echo "🔸 \033[1;34m{$solution}\033[0m\n";
                
                if (!empty($data['missing_files'])) {
                    echo "   Missing files:\n";
                    foreach ($data['missing_files'] as $file) {
                        echo "      - {$file}\n";
                    }
                }
                
                if (!empty($data['extra_files'])) {
                    echo "   Extra files:\n";
                    foreach ($data['extra_files'] as $file) {
                        echo "      + {$file}\n";
                    }
                }
                
                if (!empty($data['content_issues'])) {
                    echo "   Content issues:\n";
                    foreach ($data['content_issues'] as $file => $issue) {
                        echo "      • {$file}: {$issue}\n";
                    }
                }
                
                if (!empty($data['structure_differences'])) {
                    echo "   Structure differences:\n";
                    foreach ($data['structure_differences'] as $file => $diffs) {
                        echo "      • {$file}:\n";
                        foreach ($diffs as $diff) {
                            echo "        - {$diff}\n";
                        }
                    }
                }
                
                echo "\n";
            }
        }
        
        // Summary
        echo "🎯 RECOMMENDATIONS\n";
        echo "==================\n\n";
        
        if ($errorCount > 0) {
            echo "1. Fix missing required files in solutions with errors\n";
        }
        
        if ($warningCount > 0) {
            echo "2. Update placeholder content in solutions with warnings\n";
            echo "3. Review structure differences and align with sample\n";
        }
        
        $solutionsWithExtras = array_filter($this->report, fn($r) => !empty($r['extra_files']));
        if (!empty($solutionsWithExtras)) {
            echo "4. Review extra files in some solutions - they may be intentional\n";
        }
        
        if ($perfectCount === count($this->report)) {
            echo "🎉 All solutions have perfect structure and content!\n";
        }
        
        echo "\n";
    }
}

// Run the validator
$validator = new SolutionsStructureValidator();
$validator->run();