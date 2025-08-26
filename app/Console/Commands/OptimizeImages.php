<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class OptimizeImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sawtic:optimize-images 
                            {--quality=85 : JPEG quality (1-100)}
                            {--width=1920 : Maximum width}
                            {--height=1080 : Maximum height}
                            {--webp : Generate WebP versions}
                            {--backup : Create backups of originals}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Optimize images for better website performance';

    private $totalFiles = 0;
    private $optimizedFiles = 0;
    private $totalSavings = 0;

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('🖼️  Sawtic Image Optimization');
        $this->line('=====================================');

        $quality = $this->option('quality');
        $maxWidth = $this->option('width');
        $maxHeight = $this->option('height');
        $generateWebP = $this->option('webp');
        $createBackups = $this->option('backup');

        $imagesPath = public_path('assets/images');
        
        if (!is_dir($imagesPath)) {
            $this->error('❌ Images directory not found: ' . $imagesPath);
            return Command::FAILURE;
        }

        // Create backup directory if needed
        if ($createBackups) {
            $backupPath = storage_path('app/image-backups');
            if (!is_dir($backupPath)) {
                mkdir($backupPath, 0755, true);
                $this->info('📁 Created backup directory');
            }
        }

        $this->info('🚀 Starting image optimization...');
        $progressBar = null;

        try {
            // Get all image files
            $imageFiles = $this->getImageFiles($imagesPath);
            $this->totalFiles = count($imageFiles);

            if ($this->totalFiles === 0) {
                $this->warn('⚠️  No image files found');
                return Command::SUCCESS;
            }

            $progressBar = $this->output->createProgressBar($this->totalFiles);
            $progressBar->start();

            foreach ($imageFiles as $filePath) {
                $this->optimizeImage($filePath, $quality, $maxWidth, $maxHeight, $generateWebP, $createBackups);
                $progressBar->advance();
            }

            $progressBar->finish();
            $this->newLine(2);

            $this->generateReport();

            return Command::SUCCESS;

        } catch (\Exception $e) {
            if ($progressBar) {
                $progressBar->finish();
                $this->newLine();
            }
            
            $this->error('❌ Error during optimization: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }

    /**
     * Get all image files recursively
     */
    private function getImageFiles($directory)
    {
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($directory)
        );

        $imageFiles = [];
        $supportedExtensions = ['jpg', 'jpeg', 'png', 'webp'];

        foreach ($iterator as $file) {
            if ($file->isFile()) {
                $extension = strtolower($file->getExtension());
                if (in_array($extension, $supportedExtensions)) {
                    $imageFiles[] = $file->getPathname();
                }
            }
        }

        return $imageFiles;
    }

    /**
     * Optimize a single image using shell commands
     */
    private function optimizeImage($filePath, $quality, $maxWidth, $maxHeight, $generateWebP, $createBackups)
    {
        try {
            $originalSize = filesize($filePath);
            $extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

            // Skip WebP files for now
            if ($extension === 'webp') {
                return;
            }

            // Create backup if requested
            if ($createBackups) {
                $backupPath = storage_path('app/image-backups/' . basename($filePath) . '.backup.' . date('Y-m-d_H-i-s'));
                copy($filePath, $backupPath);
            }

            // Use shell script for optimization
            $scriptPath = base_path('scripts/optimize-images.sh');
            if (file_exists($scriptPath)) {
                $command = sprintf(
                    'cd %s && ./scripts/optimize-images.sh --quality %d --width %d --height %d %s',
                    base_path(),
                    $quality,
                    $maxWidth,
                    $maxHeight,
                    $generateWebP ? '--webp' : '--no-webp'
                );
                
                exec($command, $output, $returnCode);
            }

            $newSize = filesize($filePath);
            $savings = $originalSize - $newSize;

            if ($savings > 0) {
                $this->totalSavings += $savings;
                $this->optimizedFiles++;
            }

        } catch (\Exception $e) {
            // Continue with other files if one fails
            $this->warn("\n⚠️  Failed to optimize: " . basename($filePath) . ' - ' . $e->getMessage());
        }
    }

    /**
     * Generate optimization report
     */
    private function generateReport()
    {
        $this->info('📊 Optimization Report');
        $this->line('======================');
        $this->line('Total files processed: ' . $this->totalFiles);
        $this->line('Files optimized: ' . $this->optimizedFiles);
        $this->line('Total space saved: ' . $this->formatBytes($this->totalSavings));

        if ($this->optimizedFiles > 0) {
            $avgSavings = $this->totalSavings / $this->optimizedFiles;
            $this->line('Average savings per file: ' . $this->formatBytes($avgSavings));
        }

        $this->info('✅ Image optimization complete!');
    }

    /**
     * Format bytes to human readable format
     */
    private function formatBytes($bytes)
    {
        if ($bytes < 1024) {
            return $bytes . 'B';
        } elseif ($bytes < 1048576) {
            return round($bytes / 1024, 1) . 'KB';
        } else {
            return round($bytes / 1048576, 1) . 'MB';
        }
    }
}
