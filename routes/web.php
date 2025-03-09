<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('test2', function () {
//     return view('test2');
// });

Route::view('/', 'home');
Route::view('contact', 'contact');
Route::view('about', 'about');
// Route::view('/app', 'app');
