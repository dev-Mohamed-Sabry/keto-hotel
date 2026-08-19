<?php

use App\Http\Controllers\Website\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/rooms', 'rooms')->name('rooms');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'admin',
])->group(function () {
    Route::get('/admin-dashboard', function () {
        return view('Admin.index');
    })->name('admin.dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
