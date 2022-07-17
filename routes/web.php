<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostCommentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/post/{id}', [PostController::class, 'show'])->whereNumber('id');
Route::get('/category/{slug}', [PostController::class, 'postcat'])->whereAlpha('slug');
Route::get('/author/{username}', [PostController::class, 'authcat'])->whereAlpha('username');
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');
Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::post('/post/{post}/comments', [PostCommentsController::class, 'store']);
//Admin section
Route::middleware('can:admin')->group(function(){
Route::post('/admin/posts/create', [PostController::class, 'create']);
Route::get('/admin/posts/create', [AdminPostController::class, 'create']);
Route::get('/admin/posts', [ AdminPostController::class , 'index']);
Route::get('/admin/posts/{post}/edit', [ AdminPostController::class , 'edit']);
Route::patch('/admin/posts/{post}/edit', [ AdminPostController::class , 'update']);
Route::delete('/admin/posts/{post}/delete', [ AdminPostController::class , 'destroy']);
});