<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('test2', function () {
//     return view('test2');
// });

Route::view('/', 'home')->name('home');
Route::view('article', 'article')->name('article');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');
// Route::view('/app', 'app');
