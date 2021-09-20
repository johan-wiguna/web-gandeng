<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'heading' => 'Welcome to my web!'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/about', function () {
    $article = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci quo, numquam voluptate omnis quasi dolor aut? Amet nobis dolore suscipit.';

    return view('about', [
        'title' => 'About',
        'heading' => 'About Us',
        'article' => $article
    ]);
});