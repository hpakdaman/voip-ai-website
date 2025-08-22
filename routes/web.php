<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemoBookingController;
use App\Http\Controllers\Admin\AdminDemoController;
use App\Http\Controllers\Admin\AvailabilityController;

// Maintenance Mode Toggle - Set to true to enable maintenance mode
$maintenanceMode = false;

if ($maintenanceMode) {
    // Show maintenance page for all routes
    Route::get('/{any}', function () {
        return view('maintenance');
    })->where('any', '.*');
} else {
    // VoIP AI Business Routes
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/features', [HomeController::class, 'features'])->name('features');
    Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
    Route::get('/about', [HomeController::class, 'about'])->name('about');

    // Contact
    Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
    Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
    Route::get('/contact-us', [ContactController::class, 'show'])->name('contact-us');

    // Legal pages
    Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
    Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
    Route::get('/privacy-portal', [HomeController::class, 'privacyPortal'])->name('privacy-portal');

    // Solutions Landing Pages
    Route::get('/solutions/real-estate', [HomeController::class, 'realEstate'])->name('solutions.real-estate');
    Route::get('/solutions/spa-massage', [HomeController::class, 'spaMassage'])->name('solutions.spa-massage');
    Route::get('/solutions/healthcare', [HomeController::class, 'healthcare'])->name('solutions.healthcare');
    Route::get('/solutions/finance-banking', [HomeController::class, 'financeBanking'])->name('solutions.finance-banking');

    // Demo Booking Routes (Public)
    Route::prefix('demo')->name('demo.')->group(function () {
        Route::get('/book', [DemoBookingController::class, 'create'])->name('booking');
        Route::post('/book', [DemoBookingController::class, 'store'])->name('store');
        Route::get('/confirmation/{booking}', [DemoBookingController::class, 'confirmation'])->name('confirmation');
        
        // AJAX routes
        Route::get('/slots/available', [DemoBookingController::class, 'getAvailableSlots'])->name('slots.available');
    });

    // Additional VoIP-specific routes (add as needed)
}

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin routes (protected by auth middleware)  
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Redirect /admin to dashboard
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    // Demo booking management
    Route::resource('demos', \App\Http\Controllers\Admin\AdminDemoController::class);
    
    // Availability management
    Route::resource('availability', \App\Http\Controllers\Admin\AvailabilitySlotController::class);
    Route::post('/availability/quick-generate', [\App\Http\Controllers\Admin\AvailabilitySlotController::class, 'quickGenerate'])->name('availability.quick-generate');
    Route::post('/availability/bulk-update', [\App\Http\Controllers\Admin\AvailabilitySlotController::class, 'bulkUpdate'])->name('availability.bulk-update');
    
    // Quick actions for demos
    Route::patch('/demos/{demo}/confirm', [\App\Http\Controllers\Admin\AdminDemoController::class, 'confirm'])->name('demos.confirm');
    Route::patch('/demos/{demo}/complete', [\App\Http\Controllers\Admin\AdminDemoController::class, 'complete'])->name('demos.complete');
    Route::patch('/demos/{demo}/no-show', [\App\Http\Controllers\Admin\AdminDemoController::class, 'noShow'])->name('demos.no-show');
});
