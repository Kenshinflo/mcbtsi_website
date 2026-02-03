<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Home', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return Inertia::render('About');
})->name('About');

Route::get('/careers', function () {
    return Inertia::render('Career');
})->name('Career');

Route::get('/service', function () {
    return Inertia::render('Service');
})->name('Service');

require __DIR__.'/settings.php';
