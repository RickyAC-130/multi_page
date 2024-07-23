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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/blog-home', function () {
    return view('blog-home');
});
Route::get('/blog-post', function () {
    return view('blog-post');
});
Route::get('/portfolio-overview', function () {
    return view('portfolio-overview');
});
Route::get('/portfolio-item', function () {
    return view('portfolio-item');
});