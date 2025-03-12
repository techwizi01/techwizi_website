<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| These routes handle the primary pages of the website.
| Applied caching for performance optimization.
*/

// Route::middleware(['cache.headers:public;max_age=86400;etag'])->group(function () {
// });

// Group all page routes under PageController for clean routing
Route::controller(PageController::class)->group(function () {

    // Homepage
    Route::get('/', 'index')->name('home');

    // About Us Page
    Route::get('/about', 'about')->name('about');

    // Services Page
    Route::get('/service', 'service')->name('service');

    // Portfolio Page (Showcase Work)
    Route::get('/portfolio', 'portfolio')->name('portfolio');

    // Pricing Page (Plans & Packages)
    Route::get('/pricing', 'pricing')->name('pricing');

    // FAQ Page (Frequently Asked Questions)
    Route::get('/faq', 'faq')->name('faq');

    // Policies Page (Legal & Privacy Policies)
    Route::get('/policies', 'policies')->name('legal');

    // Blog Page (Company News & Insights)
    Route::get('/blog', 'blog')->name('blog');

    // Contact Page (Get in Touch)
    Route::get('/contact-us', 'contact')->name('contact');
});
