<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Author;

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

Route::get('/', function () {
    return view('welcome', [
        'title' => 'home',
        'slug' => 'Home'
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'name' => 'Nicholaus',
        'about' => 'Hi, I am Nicholaus. I am a 20-year-old student currently studying computer science and statistics at Bina Nusantara University. I am passionate about technology and enjoys learning about programming languages and software development. In my free time, I like to play video games, listen to music, and watch movies. I also enjoys staying active by going for runs and playing basketball with my friends. With My dedication and hard work, I hope to one day become a successful data scientist.',
        'title' => 'profile',
        'slug' => 'Profile'
    ]);
});

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{blog:slug}', [BlogController::class, 'show']);

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{authors:slug}', [AuthorController::class, 'show']);