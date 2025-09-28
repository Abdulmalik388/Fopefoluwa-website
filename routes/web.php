<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeamController;

// Public Pages
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/blogs/{blog}', [PagesController::class, 'show'])->name('blogs.show');

Route::get('/donate', [PagesController::class, 'donate'])->name('donate');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/team', [PagesController::class, 'team'])->name('team');

// Admin



Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


Route::prefix('admin')->group(function () {
    Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');
});


Route::prefix('admin')->name('admin.')->group(function () {
    // Show all team members
    Route::get('/team', [TeamController::class, 'adminIndex'])->name('team.index');

    // Show form to create a new member
    Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');

    // Store new member
    Route::post('/team', [TeamController::class, 'store'])->name('team.store');

    // Show form to edit a member
    Route::get('/team/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');

    // Update member
    Route::put('/team/{id}', [TeamController::class, 'update'])->name('team.update');

    // Delete member
    Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
});
