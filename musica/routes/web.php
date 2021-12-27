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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ----------- SITE ROUTES ----------

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/episodes', function () {
    return view('episodes');
})->name('episodes');

Route::get('/addpodcast', function () {
    return view('podcasts.addNewPodcast');
})->name('addpodcast');

Route::get('/mypodcast', function () {
    return view('podcasts.myPodcast');
})->name('mypodcast');
