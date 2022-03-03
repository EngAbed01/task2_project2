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
|
*/

Route::prefix('app')->group(function () {
    Route::view('/', 'index')->name(('app.home'));
    Route::view('/about', 'about')->name(('app.about'));
    Route::view('/contact', 'contact')->name(('app.contact'));
    Route::view('/post', 'post')->name(('app.post'));
});

Route::fallback(function () {
    echo "NOT FOUND!";
});
