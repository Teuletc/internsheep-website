<?php

use App\Models\User;
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
Route::post('/ajouter-entreprise', [App\Http\Controllers\CompanieController::class, 'store'])->name('ajouter-entreprise');
Route::delete('/supprimer-entreprise/{companie}', [App\Http\Controllers\CompanieController::class, 'destroy'])->name('supprimer-entreprise');

Route::get('/admin-offer', [App\http\Controllers\AdminOfferController::class, 'show']);
Route::post('/ajouter-offer', [App\Http\Controllers\InternshipsController::class, 'store'])->name('ajouter-stage');
Route::delete('/supprimer-offer/{offer}', [App\Http\Controllers\InternshipsController::class, 'destroy'])->name('supprimer-offer');

Route::get('/admin-pilote', [App\http\Controllers\AdminPiloteController::class, 'show']);
Route::get('/admin-student', [App\http\Controllers\AdminStudentController::class, 'show']);

Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users');
Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');


Route::get('/pilote-companie', [App\http\Controllers\PiloteCompanieController::class, 'show']);

Route::get('/pilote-offer', [App\http\Controllers\PiloteOfferController::class, 'show']);

Route::get('/pilote-student', [App\http\Controllers\PiloteStudentController::class, 'show']);



Route::get('/auth-page', [App\http\controllers\AuthPageController::class, 'show']);



Route::get('/student-page', [App\http\Controllers\StudentPageController::class, 'show']);
Route::get('/student-companie-page', [App\http\Controllers\StudentCompanieController::class, 'showcompanie']);
Route::get('/student-offers-page', [App\http\Controllers\StudentOffersController::class, 'show']);
Route::get('/student-wishlist-offers', [App\http\Controllers\StudentWishlistOffersController::class, 'show']);

Route::get('/offers/{id}', [App\http\Controllers\studentvoirinternships::class, 'showinternship']);
Route::get('/companie/{id}', [App\http\Controllers\studentvoircompanies::class, 'showcompanie']);