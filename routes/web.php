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
    return view('home');
});

Route::get('/layout', function () {
    return view('layout');
}); 

Route::get('/about', function () {
    return view('about');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/policy', function () {
    return view('policy');
});

Route::get('/terms', function () {
    return view('terms');
});
