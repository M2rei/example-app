<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/about', function(){
    return view('content.about', [
    "name" => "lala",
    "email" => "lala@gmail.com"]);
});

Route::get('/dashboard', function(){
    return view('content.dashboard');
});

Route::get('/about', function(){
    return view('content.about');
});

