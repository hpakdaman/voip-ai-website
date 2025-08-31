<?php

namespace App\Services;

use Illuminate\Support\Facades\File;

class IndustryDataService
{
    private string $industry;
    private string $dataPath;
    private array $cache = [];

    public function __construct(string $industry)
    {
        $this->industry = $industry;
        $this->dataPath = resource_path("data/solutions/{$industry}");
    }

    /**
     * Load JSON data file with caching
     */
    private function loadData(string $filename): array
    {
        if (isset($this->cache[$filename])) {
            return $this->cache[$filename];
        }

        $filePath = $this->dataPath . '/' . $filename;
        
        if (!File::exists($filePath)) {
            $this->cache[$filename] = [];
            return [];
        }

        $content = File::get($filePath);
        $data = json_decode($content, true);
        
        if (!$data) {
            $this->cache[$filename] = [];
            return [];
        }

        $this->cache[$filename] = $data;
        return $data;
    }

    /**
     * Get hero section data
     */
    public function getHeroData(): array
    {
        return $this->loadData('hero.json');
    }

    /**
     * Get problem-solution section data  
     */
    public function getProblemSolutionData(): array
    {
        return $this->loadData('problems.json');
    }

    /**
     * Get AI capabilities data
     */
    public function getCapabilitiesData(): array
    {
        return $this->loadData('capabilities.json');
    }

    /**
     * Get voice samples data
     */
    public function getVoiceSamplesData(): array
    {
        // Handle different filename patterns
        $voiceDemos = $this->loadData('voice-demos.json');
        if (!empty($voiceDemos)) {
            return $voiceDemos;
        }

        return $this->loadData('voice-demos.json');
    }

    /**
     * Get success stories data
     */
    public function getSuccessStoriesData(): array
    {
        return $this->loadData('success-stories.json');
    }

    /**
     * Get ROI calculator data
     */
    public function getRoiCalculatorData(): array
    {
        return $this->loadData('roi-calculator.json');
    }

    /**
     * Get feature showcase data
     */
    public function getFeatureShowcaseData(): array
    {
        return $this->loadData('features.json');
    }

    /**
     * Get CTA conversion data
     */
    public function getCtaData(): array
    {
        return $this->loadData('cta.json');
    }

    /**
     * Alias methods for consistent naming
     */
    public function getProblemsData(): array
    {
        return $this->getProblemSolutionData();
    }

    public function getFeaturesData(): array
    {
        return $this->getFeatureShowcaseData();
    }

    public function getVoiceDemosData(): array
    {
        return $this->loadData('voice-demos.json');
    }

    /**
     * Get digital dashboard data (government-specific)
     */
    public function getDigitalDashboardData(): array
    {
        return $this->loadData('digital-dashboard.json');
    }

    /**
     * Get service matrix data (government-specific)
     */
    public function getServiceMatrixData(): array
    {
        return $this->loadData('service-matrix.json');
    }

    /**
     * Get all available data files for this industry
     */
    public function getAvailableDataFiles(): array
    {
        if (!File::isDirectory($this->dataPath)) {
            return [];
        }

        return collect(File::files($this->dataPath))
            ->filter(fn($file) => $file->getExtension() === 'json')
            ->map(fn($file) => $file->getFilenameWithoutExtension())
            ->values()
            ->toArray();
    }
}