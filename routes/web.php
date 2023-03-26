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

Route::get('/', [App\http\Controllers\AuthPageController::class, 'show']);

Route::get('/admin-companie', [App\http\Controllers\AdminCompanieController::class, 'show']);

Route::get('/admin-offer', [App\http\Controllers\AdminOfferController::class, 'show']);
Route::post('/ajouter-stage', [App\Http\Controllers\InternshipsController::class, 'store'])->name('ajouter-stage');

Route::get('/admin-pilote', [App\http\Controllers\AdminPiloteController::class, 'show']);
Route::get('/admin-student', [App\http\Controllers\AdminStudentController::class, 'show']);



Route::get('/auth-page', [App\http\controllers\AuthPageController::class, 'show']);



Route::get('/student-page', [App\http\Controllers\StudentPageController::class, 'show']);
Route::get('/student-companie-page', [App\http\Controllers\StudentCompanieController::class, 'show']);
Route::get('/student-offers-page', [App\http\Controllers\StudentOffersController::class, 'show']);
Route::get('/student-wishlist-offers', [App\http\Controllers\StudentWishlistOffersController::class, 'show']);

