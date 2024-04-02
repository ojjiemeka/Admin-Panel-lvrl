<?php

use App\Http\Controllers\CelebController;
use App\Http\Controllers\PricesController;
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
Route::resource('prices', PricesController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mailer', [App\Http\Controllers\HomeController::class, 'createMail'])->name('createMail');
Auth::routes();

