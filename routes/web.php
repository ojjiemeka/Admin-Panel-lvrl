<?php

use App\Http\Controllers\CelebController;
<<<<<<< HEAD
use App\Http\Controllers\PriceController;
=======
use App\Http\Controllers\PricesController;
>>>>>>> f3aad89ea20df3fc0b7571575eea512a65373124
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
    return view('welcome');
});
Route::get('/aboutUs', [App\Http\Controllers\PagesController::class, 'aboutUs'])->name('aboutUs');
Route::get('/aboutUs', [App\Http\Controllers\PagesController::class, 'ContactUs'])->name('contactUs');

Route::resource('celebs', CelebController::class);
<<<<<<< HEAD
Route::resource('prices', PriceController::class);
=======
Route::resource('prices', PricesController::class);
>>>>>>> f3aad89ea20df3fc0b7571575eea512a65373124

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mailer', [App\Http\Controllers\HomeController::class, 'createMail'])->name('createMail');
Auth::routes();

