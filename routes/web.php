<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'showIndex']) -> name('home');
Route::get('/profile', [PagesController::class, 'showProfile']) -> name('profile');
Route::get('/dashboard', [PagesController::class, 'showDashboard']) -> name('dashboard');
Route::get('/dashboard/edit', [TestController::class, 'edit']) -> name('tests.edit');
Route::put('/dashboard/update', [TestController::class, 'update']) -> name('tests.update');
Route::resource('/faq', FaqController::class);
Route::resource('/blog', PostController::class);
