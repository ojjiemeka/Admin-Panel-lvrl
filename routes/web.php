<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CelebController;
use App\Http\Controllers\FanCard;
use App\Http\Controllers\FanCardController;
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
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('aboutUs');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'Contact'])->name('contactUs');
Route::get('/celebrities', [App\Http\Controllers\PagesController::class, 'celebrities'])->name('celebrities');
Route::get('/vip-subscription', [App\Http\Controllers\PagesController::class, 'vipSubscription'])->name('vip-subscription');
Route::get('/booking/{id}', [App\Http\Controllers\PagesController::class, 'booking'])->name('bookings');
Route::get('/success', [App\Http\Controllers\PagesController::class, 'successPage'])->name('success');



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mailer', [App\Http\Controllers\HomeController::class, 'createMail'])->name('createMail');
Route::get('/send-mail', [App\Http\Controllers\MailController::class, 'sendMail'])->name('sendMail');
Route::resource('celebs', CelebController::class);
Route::resource('prices', PricesController::class);
Route::resource('bookings', BookingController::class);
Route::resource('fancards', FanCardController::class);

