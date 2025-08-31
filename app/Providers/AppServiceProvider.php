<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Custom Blade directive for inlining critical CSS
        Blade::directive('criticalcss', function ($expression) {
            return "<?php 
                \$cssFile = public_path($expression);
                if (file_exists(\$cssFile)) {
                    echo '<style>' . file_get_contents(\$cssFile) . '</style>';
                }
            ?>";
        });
    }
}
