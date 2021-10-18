<?php

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


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::redirect('/about', '/about/story');

Route::get('/about/story', function () {
    return view('about-story', [
        "title" => "About Us"
    ]);
});

Route::get('/about/vision-mission', function () {
    return view('about-vision-mission', [
        "title" => "About Us"
    ]);
});

Route::get('/about/founders', function () {
    return view('about-founders', [
        "title" => "About Us"
    ]);
});

Route::get('/departments', function () {
    return view('departments', [
        "title" => "Departments"
    ]);
});