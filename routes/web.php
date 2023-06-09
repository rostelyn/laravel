<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\profilecontroller;
use App\Http\Controllers\landingcontroller;
use App\Http\Controllers\newscontroller;
use App\Http\Controllers\contactController;
use App\Http\Controllers\eventscontroller;
use App\Http\Controllers\Authcontroller;

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

Route::get('/home',[homecontroller::class,'index'])->name('home');
Route::get('/profile',[profilecontroller::class,'index'])->name('profile');
Route::get('/news',[newscontroller::class,'index'])->name('news');
Route::get('/landing',[landingcontroller::class,'index'])->name('landing');
Route::get('/events',[eventscontroller::class,'index'])->name('events');
Route::get('/contact',[contactController::class,'index'])->name('contact');
Route::post('/contact/submit',[contactController::class,'submit'])->name('contact.submit');

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'index'])->name('login.submit');

