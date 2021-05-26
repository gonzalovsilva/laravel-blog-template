<?php

use App\Http\Controllers\PostsController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/',
    [PostsController::class, 'home']
)->name('home');

Route::get('/about', fn () => view('about'))->name('about');

Route::get(
    '/posts',
    [PostsController::class, 'index']
)->name('posts');

Route::get(
    '/posts/{post:slug}',
    [PostsController::class, 'show']
);

Route::get('/contact', fn () => view('contact'))->name('contact');

Route::get('/dashboard', fn () => view('dashboard'))->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
