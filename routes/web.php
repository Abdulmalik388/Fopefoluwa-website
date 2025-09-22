<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;

// Public Pages
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/donate', [PagesController::class, 'donate'])->name('donate');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/team', [PagesController::class, 'team'])->name('team');

// Admin



Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
