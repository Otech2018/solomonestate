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
Route::get('/agric_consult', [App\Http\Controllers\PageController::class, 'agric_consult'])->name('agric_consult');
Route::get('/build_u', [App\Http\Controllers\PageController::class, 'build_u'])->name('build_u');
Route::get('/sale_rent_property', [App\Http\Controllers\PageController::class, 'sale_rent_property'])->name('sale_rent_property');
Route::get('/pay_rent', [App\Http\Controllers\PageController::class, 'pay_rent'])->name('pay_rent');
Route::get('/save_build', [App\Http\Controllers\PageController::class, 'save_build'])->name('save_build');
Route::resource('form', App\Http\Controllers\UserFormController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
