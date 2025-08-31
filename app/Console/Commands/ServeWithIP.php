<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class ServeWithIP extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'serve:ip {--host=0.0.0.0} {--port=8000}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start Laravel development server with network IP display';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $host = $this->option('host');
        $port = $this->option('port');
        
        // Get network IPs
        $networkIPs = $this->getNetworkIPs();
        
        // Display server information
        $this->info('');
        $this->info('  🚀 Laravel Development Server Starting...');
        $this->info('  =========================================');
        $this->info('');
        $this->info('  Local:      http://localhost:' . $port);
        $this->info('  Local:      http://127.0.0.1:' . $port);
        
        foreach ($networkIPs as $ip) {
            $this->info('  Network:    http://' . $ip . ':' . $port);
        }
        
        $this->info('');
        $this->info('  📱 Mobile Access:');
        $this->info('  Use the Network URL on devices connected to the same WiFi');
        $this->info('');
        $this->info('  Press Ctrl+C to stop the server');
        $this->info('  =========================================');
        $this->info('');
        
        // Start the actual serve command
        $process = new Process(['php', 'artisan', 'serve', '--host=' . $host, '--port=' . $port]);
        
        // Only use TTY if available
        if (Process::isTtySupported()) {
            $process->setTty(true);
        }
        
        $process->setTimeout(null);
        
        try {
            $process->run(function ($type, $buffer) {
                echo $buffer;
            });
        } catch (\Exception $e) {
            $this->error('Server stopped: ' . $e->getMessage());
        }
    }
    
    /**
     * Get network IP addresses
     */
    private function getNetworkIPs(): array
    {
        $ips = [];
        
        if (PHP_OS_FAMILY === 'Darwin' || PHP_OS_FAMILY === 'Linux') {
            // macOS and Linux
            exec("ifconfig | grep 'inet ' | grep -v 127.0.0.1 | awk '{print $2}'", $output);
            foreach ($output as $ip) {
                $ip = trim($ip);
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
                    $ips[] = $ip;
                }
            }
        } elseif (PHP_OS_FAMILY === 'Windows') {
            // Windows
            exec('ipconfig | findstr /i "ipv4"', $output);
            foreach ($output as $line) {
                if (preg_match('/(\d+\.\d+\.\d+\.\d+)/', $line, $matches)) {
                    $ip = $matches[1];
                    if ($ip !== '127.0.0.1' && filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
                        $ips[] = $ip;
                    }
                }
            }
        }
        
        // Fallback to gethostbyname
        if (empty($ips)) {
            $hostname = gethostname();
            $ip = gethostbyname($hostname);
            if ($ip !== $hostname && $ip !== '127.0.0.1') {
                $ips[] = $ip;
            }
        }
        
        return array_unique($ips);
    }
}