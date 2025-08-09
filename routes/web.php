<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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

// Additional VoIP-specific routes (add as needed)
