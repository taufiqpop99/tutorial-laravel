<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

// About
Route::get('/about', [AboutController::class, 'index']);

// Blog
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{post:slug}', [BlogController::class, 'show']);

// Category
Route::get('/categories', [CategoryController::class, 'index']);

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

// Post (CRUD)
Route::get('/dashboard/posts', [DashboardPostController::class, 'index'])->middleware('auth');
Route::get('/dashboard/posts/show/{post:slug}', [DashboardPostController::class, 'show'])->middleware('auth');
Route::get('/dashboard/posts/create', [DashboardPostController::class, 'create'])->middleware('auth');
Route::post('/dashboard/posts/store', [DashboardPostController::class, 'store'])->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/posts/{post:slug}/edit', [DashboardPostController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/posts/{post:slug}', [DashboardPostController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/posts/delete/{post:slug}', [DashboardPostController::class, 'destroy'])->middleware('auth');

// Category (CRUD) --Middleware
// Route::get('/dashboard/category', [AdminCategoryController::class, 'index'])->middleware('admin');
// Route::get('/dashboard/category/create', [AdminCategoryController::class, 'create'])->middleware('admin');
// Route::post('/dashboard/category/store', [AdminCategoryController::class, 'store'])->middleware('admin');
// Route::get('/dashboard/category/{category}/edit', [AdminCategoryController::class, 'edit'])->middleware('admin');
// Route::put('/dashboard/category/{category}', [AdminCategoryController::class, 'update'])->middleware('admin');
// Route::delete('/dashboard/category/delete/{category}', [AdminCategoryController::class, 'destroy'])->middleware('admin');

// Category (CRUD) --Gate
Route::get('/dashboard/category', [AdminCategoryController::class, 'index'])->middleware('admin');
Route::get('/dashboard/category/create', [AdminCategoryController::class, 'create'])->middleware('admin');
Route::post('/dashboard/category/store', [AdminCategoryController::class, 'store'])->middleware('admin');
Route::get('/dashboard/category/{category}/edit', [AdminCategoryController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/category/{category}', [AdminCategoryController::class, 'update'])->middleware('admin');
Route::delete('/dashboard/category/delete/{category}', [AdminCategoryController::class, 'destroy'])->middleware('admin');
