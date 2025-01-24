<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WhatIDoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/resume', [HomeController::class, 'resume'])->name('resume');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('project-categories', ProjectCategoryController::class)->only(['index', 'store', 'update', 'destroy']);
    Route::resource('projects', ProjectController::class);
    Route::resource('about-us', AboutUsController::class);
    Route::resource('what-i-do', WhatIDoController::class);
    Route::resource('testimonial', TestimonialController::class);
});
