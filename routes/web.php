<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/creative-business-webinar', App\Livewire\WebinarPage::class)->name('webinar');
