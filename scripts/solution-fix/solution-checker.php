<?php

/**
 * Solution Data Comparison Script
 * Compares all solution data files with sample template to identify unchanged values
 * 
 * Usage: php scripts/solution-fix/solution-checker.php
 * 
 * This script checks all solution industries against the sample template
 * and reports any unchanged placeholder values or identical content.
 */

class SolutionChecker
{
    private $basePath;
    private $samplePath;
    private $solutions = [];
    private $coreFiles = [
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
    
    // Special files for specific industries
    private $specialFiles = [
        'government' => ['digital-dashboard.json', 'service-matrix.json']
    ];
    
    private $report = [];
    private $summary = [];

    public function __construct()
    {
        $this->basePath = __DIR__ . '/../../resources/data/solutions/';
        $this->samplePath = $this->basePath . 'sample/';
        $this->loadSolutions();
        $this->initializeReport();
    }

    private function loadSolutions()
    {
        $directories = scandir($this->basePath);
        foreach ($directories as $dir) {
            if ($dir !== '.' && $dir !== '..' && $dir !== 'sample' && is_dir($this->basePath . $dir)) {
                $this->solutions[] = $dir;
            }
        }
        sort($this->solutions);
    }

    private function initializeReport()
    {
        $this->report = [
            'timestamp' => date('Y-m-d H:i:s'),
            'total_solutions' => count($this->solutions),
            'solutions_checked' => [],
            'summary' => [],
            'detailed_issues' => []
        ];
    }

    public function runComparison()
    {
        echo "🔍 Starting Solution Data Comparison...\n";
        echo "📂 Found " . count($this->solutions) . " solutions to check\n";
        echo "📋 Solutions: " . implode(', ', $this->solutions) . "\n\n";

        foreach ($this->solutions as $solution) {
            echo "🔄 Checking: {$solution}\n";
            $this->checkSolution($solution);
        }

        $this->generateSummary();
        $this->displayReport();
        $this->saveReport();
    }

    private function checkSolution($solution)
    {
        $solutionPath = $this->basePath . $solution . '/';
        $solutionReport = [
            'solution' => $solution,
            'files_checked' => [],
            'issues_found' => 0,
            'total_comparisons' => 0,
            'unchanged_values' => [],
            'missing_files' => [],
            'status' => 'processed'
        ];

        // Check core files
        foreach ($this->coreFiles as $file) {
            $result = $this->compareFile($solution, $file);
            $solutionReport['files_checked'][] = $file;
            $solutionReport['total_comparisons'] += $result['comparisons'];
            $solutionReport['issues_found'] += $result['issues'];
            
            if (!empty($result['unchanged_values'])) {
                $solutionReport['unchanged_values'][$file] = $result['unchanged_values'];
            }
            
            if ($result['file_missing']) {
                $solutionReport['missing_files'][] = $file;
            }
        }

        // Check special files for specific industries
        if (isset($this->specialFiles[$solution])) {
            foreach ($this->specialFiles[$solution] as $specialFile) {
                if (file_exists($solutionPath . $specialFile)) {
                    $solutionReport['files_checked'][] = $specialFile;
                    echo "   ✅ Special file found: {$specialFile}\n";
                } else {
                    $solutionReport['missing_files'][] = $specialFile;
                    echo "   ❌ Special file missing: {$specialFile}\n";
                }
            }
        }

        $this->report['solutions_checked'][$solution] = $solutionReport;
        
        $status = $solutionReport['issues_found'] > 0 ? '⚠️' : '✅';
        echo "   {$status} Issues found: {$solutionReport['issues_found']}\n\n";
    }

    private function compareFile($solution, $filename)
    {
        $sampleFile = $this->samplePath . $filename;
        $solutionFile = $this->basePath . $solution . '/' . $filename;
        
        $result = [
            'comparisons' => 0,
            'issues' => 0,
            'unchanged_values' => [],
            'file_missing' => false
        ];

        if (!file_exists($sampleFile)) {
            echo "   ❌ Sample file missing: {$filename}\n";
            return $result;
        }

        if (!file_exists($solutionFile)) {
            echo "   ❌ Solution file missing: {$filename}\n";
            $result['file_missing'] = true;
            return $result;
        }

        $sampleData = json_decode(file_get_contents($sampleFile), true);
        $solutionData = json_decode(file_get_contents($solutionFile), true);

        if ($sampleData === null || $solutionData === null) {
            echo "   ❌ JSON parsing error in: {$filename}\n";
            return $result;
        }

        $this->compareData($sampleData, $solutionData, $filename, $result, '');
        
        return $result;
    }

    private function compareData($sample, $solution, $filename, &$result, $path = '')
    {
        if (is_array($sample)) {
            foreach ($sample as $key => $value) {
                $currentPath = $path ? $path . '.' . $key : $key;
                $result['comparisons']++;
                
                if (!isset($solution[$key])) {
                    $result['issues']++;
                    $result['unchanged_values'][] = [
                        'path' => $currentPath,
                        'issue' => 'missing_key',
                        'sample_value' => $value,
                        'solution_value' => null
                    ];
                    continue;
                }

                if (is_array($value)) {
                    $this->compareData($value, $solution[$key], $filename, $result, $currentPath);
                } else {
                    // Check for unchanged values
                    if ($value === $solution[$key]) {
                        // Check if it's a placeholder that should have been changed
                        if ($this->isUnchangedPlaceholder($value)) {
                            $result['issues']++;
                            $result['unchanged_values'][] = [
                                'path' => $currentPath,
                                'issue' => 'unchanged_placeholder',
                                'sample_value' => $value,
                                'solution_value' => $solution[$key]
                            ];
                        }
                    }
                }
            }
        }
    }

    private function isUnchangedPlaceholder($value)
    {
        if (!is_string($value)) {
            return false;
        }

        // Common placeholder patterns
        $placeholderPatterns = [
            '/\[industry\]/',
            '/\[capability\]/',
            '/\[solution\]/',
            '/\[company\]/',
            '/\[service\]/',
            '/\[metric\]/',
            '/\[benefit\]/',
            '/\[feature\]/',
            '/Sample/',
            '/placeholder/',
            '/template/',
            '/example/',
            '/demo/'
        ];

        foreach ($placeholderPatterns as $pattern) {
            if (preg_match($pattern, $value)) {
                return true;
            }
        }

        // Check for generic/template content
        $genericContent = [
            'Lorem ipsum',
            'Sample text',
            'Placeholder content',
            'Template description',
            'Example content',
            'Demo text'
        ];

        foreach ($genericContent as $generic) {
            if (stripos($value, $generic) !== false) {
                return true;
            }
        }

        return false;
    }

    private function generateSummary()
    {
        $totalIssues = 0;
        $solutionsWithIssues = 0;
        $fileStats = [];

        foreach ($this->report['solutions_checked'] as $solution => $data) {
            $totalIssues += $data['issues_found'];
            if ($data['issues_found'] > 0) {
                $solutionsWithIssues++;
            }

            foreach ($data['files_checked'] as $file) {
                if (!isset($fileStats[$file])) {
                    $fileStats[$file] = ['checked' => 0, 'issues' => 0];
                }
                $fileStats[$file]['checked']++;
                if (isset($data['unchanged_values'][$file])) {
                    $fileStats[$file]['issues'] += count($data['unchanged_values'][$file]);
                }
            }
        }

        $this->report['summary'] = [
            'total_issues' => $totalIssues,
            'solutions_with_issues' => $solutionsWithIssues,
            'solutions_clean' => count($this->solutions) - $solutionsWithIssues,
            'file_statistics' => $fileStats,
            'completion_rate' => round(($solutionsWithIssues > 0 ? 
                (count($this->solutions) - $solutionsWithIssues) / count($this->solutions) * 100 : 100), 2)
        ];
    }

    private function displayReport()
    {
        echo "\n" . str_repeat('=', 70) . "\n";
        echo "📊 SOLUTION DATA COMPARISON REPORT\n";
        echo str_repeat('=', 70) . "\n\n";

        // Summary
        echo "📈 SUMMARY:\n";
        echo "   Total Solutions: " . $this->report['total_solutions'] . "\n";
        echo "   Solutions with Issues: " . $this->report['summary']['solutions_with_issues'] . "\n";
        echo "   Clean Solutions: " . $this->report['summary']['solutions_clean'] . "\n";
        echo "   Total Issues Found: " . $this->report['summary']['total_issues'] . "\n";
        echo "   Completion Rate: " . $this->report['summary']['completion_rate'] . "%\n\n";

        // File Statistics
        echo "📋 FILE STATISTICS:\n";
        foreach ($this->report['summary']['file_statistics'] as $file => $stats) {
            $status = $stats['issues'] > 0 ? '⚠️' : '✅';
            echo "   {$status} {$file}: {$stats['checked']} solutions checked, {$stats['issues']} issues\n";
        }
        echo "\n";

        // Detailed Issues by Solution
        echo "🔍 DETAILED ISSUES BY SOLUTION:\n";
        foreach ($this->report['solutions_checked'] as $solution => $data) {
            if ($data['issues_found'] > 0) {
                echo "\n🚨 {$solution} ({$data['issues_found']} issues):\n";
                
                if (!empty($data['missing_files'])) {
                    echo "   Missing Files: " . implode(', ', $data['missing_files']) . "\n";
                }
                
                foreach ($data['unchanged_values'] as $file => $issues) {
                    echo "   📄 {$file}:\n";
                    foreach ($issues as $issue) {
                        echo "      • {$issue['path']}: {$issue['issue']}\n";
                        $sampleValue = $issue['sample_value'];
                        if (is_array($sampleValue)) {
                            echo "        Sample: [array with " . count($sampleValue) . " items]\n";
                        } elseif (is_string($sampleValue)) {
                            echo "        Sample: " . substr($sampleValue, 0, 100) . "\n";
                        } else {
                            echo "        Sample: " . var_export($sampleValue, true) . "\n";
                        }
                    }
                }
            } else {
                echo "✅ {$solution}: All data customized\n";
            }
        }

        echo "\n" . str_repeat('=', 70) . "\n";
    }

    private function saveReport()
    {
        $reportFile = __DIR__ . '/solution-comparison-report-' . date('Y-m-d-H-i-s') . '.json';
        file_put_contents($reportFile, json_encode($this->report, JSON_PRETTY_PRINT));
        echo "📄 Detailed report saved to: {$reportFile}\n";
        
        // Also create a simple text summary
        $summaryFile = __DIR__ . '/solution-summary-' . date('Y-m-d-H-i-s') . '.txt';
        ob_start();
        $this->displayReport();
        $summary = ob_get_clean();
        file_put_contents($summaryFile, $summary);
        echo "📄 Summary report saved to: {$summaryFile}\n\n";
    }
}

// Run the comparison
$checker = new SolutionChecker();
$checker->runComparison();

echo "🎉 Solution comparison completed!\n";