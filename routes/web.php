<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'showIndex']) -> name('home');
Route::get('/profile', [PagesController::class, 'showProfile']) -> name('profile');
Route::get('/dashboard', [PagesController::class, 'showDashboard']) -> name('dashboard');
Route::get('/faq', [PagesController::class, 'showFaq']) -> name('faq');
Route::get('/blog', [PagesController::class, 'showBlog']) -> name('blog');
Route::get('/blog/{id}', [PagesController::class, 'showBlogPage']) -> name('blogPage');

