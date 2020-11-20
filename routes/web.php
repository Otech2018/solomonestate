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



Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('homepage');
Route::get('/listing', [App\Http\Controllers\PageController::class, 'listing'])->name('listing');
Route::get('/listing_details', [App\Http\Controllers\PageController::class, 'listing_details'])->name('listing_details');
Route::get('/contact_us', [App\Http\Controllers\PageController::class, 'contact_us'])->name('contact_us');
Route::get('/our_team', [App\Http\Controllers\PageController::class, 'our_team'])->name('our_team');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
