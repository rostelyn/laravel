<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\profilecontroller;
use App\Http\Controllers\landingcontroller;
use App\Http\Controllers\newscontroller;
use App\Http\Controllers\contacts;
use App\Http\Controllers\eventscontroller;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[homecontroller::class,'index'])->name('home');
Route::get('/profile',[profilecontroller::class,'index'])->name('profile');
Route::get('/news',[newscontroller::class,'index'])->name('news');
Route::get('/landing',[landingcontroller::class,'index'])->name('landing');
Route::get('/events',[eventscontroller::class,'index'])->name('events');
Route::get('/contacts',[contactscontroller::class,'index'])->name('contacts');



