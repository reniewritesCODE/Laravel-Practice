<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('test2', function () {
//     return view('test2');
// });

Route::view('/home', 'home');
