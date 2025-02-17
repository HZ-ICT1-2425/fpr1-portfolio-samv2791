<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'showIndex']) -> name('home');
Route::get('/profile', [PagesController::class, 'showProfile']) -> name('profile');
Route::get('/dashboard', [PagesController::class, 'showDashboard']) -> name('dashboard');
Route::resource('/faq', FaqController::class);
Route::resource('/blog', PostController::class);
