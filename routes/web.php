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

Route::get('/', function () {
    return view('student-page');
});

Route::get('admin-companie', function () {
    return view('admin-companie');
});

Route::get('admin-offer', function () {
    return view('admin-offer');
});

Route::get('admin-pilote', function () {
    return view('admin-pilote');
});

Route::get('admin-student', function () {
    return view('admin-student');
});

Route::get('auth-page', function () {
    return view('auth-page');
});

Route::get('student-page', function () {
    return view('student-page');
});

Route::get('companie-page', function () {
    return view('student-companie-page');
});

Route::get('offers-page', function () {
    return view('student-offers-page');
});

Route::get('wishlist-offers', function () {
    return view('student-wishlist-offers');
});