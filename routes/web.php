<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', App\Livewire\HomePage::class)->name('home');
Route::get('/about', App\Livewire\AboutPage::class)->name('about');
Route::get('/koje-originals', App\Livewire\KojeOriginalsPage::class)->name('koje-originals');
Route::get('/koje-essentials', App\Livewire\KojeEssentialsPage::class)->name('koje-essentials');
Route::get('/koje-production', App\Livewire\KojeProductionPage::class)->name('koje-production');
Route::get('/koje-initiative', App\Livewire\KojeInitiativePage::class)->name('koje-initiative');
Route::get('/koje-vision-screen', App\Livewire\KojeVisionScreenPage::class)->name('koje-vision-screen');
Route::get('/events', App\Livewire\EventsPage::class)->name('events');
Route::get('/gallery', App\Livewire\GalleryPage::class)->name('gallery');
Route::get('/contact', App\Livewire\ContactPage::class)->name('contact');
Route::get('/cbw', App\Livewire\WebinarPage::class)->name('webinar');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', App\Livewire\Admin\Login::class)->name('admin.login');

    Route::middleware('admin')->group(function () {
        Route::get('/', App\Livewire\Admin\Dashboard::class)->name('admin.dashboard');
        Route::get('/webinar-registrations', App\Livewire\Admin\WebinarRegistrations::class)->name('admin.webinar-registrations');
        Route::get('/contact-messages', App\Livewire\Admin\ContactMessages::class)->name('admin.contact-messages');
        Route::post('/logout', function () {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            return redirect()->route('admin.login');
        })->name('admin.logout');
    });
});
