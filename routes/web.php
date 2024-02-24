<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Symfony\Component\HttpFoundation\Request;
use PHPUnit\Framework\Attributes\PostCondition;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// All blogs
Route::get('/', [PostController::class, 'index']);



// Show edit form
Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->middleware('auth');

// Show create form
Route::get('/posts/create', [PostController::class, 'create']);

// Store post
Route::post('/posts', [PostController::class, 'store']);

// Update post
Route::put('/posts/{post}', [PostController::class, 'update']);

// Destory post
Route::delete('/posts/{post}', [PostController::class, 'destroy']);

// Single post
Route::get('/posts/{post}', [PostController::class, 'show']);

// Show register form
Route::get('/register', [UserController::class, 'create']);

// Store user
Route::post('/users', [UserController::class, 'store']);

// Log user out
Route::post('/logout', [UserController::class, 'logout']);

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Log user in
Route::post('/login', [UserController::class, 'auth']);
