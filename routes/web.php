<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcomecontroller;
use App\Http\Controllers\Aboutuscontroller;
use App\Http\Controllers\Bookingcontroller;
use App\Http\Controllers\Faqcontroller;

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


Route::get('/',[Welcomecontroller::class,'welcome']);
Route::get('/about',[Aboutuscontroller::class,'about']);
Route::get('/booking',[Bookingcontroller::class,'booking']);
Route::get('/faq',[Faqcontroller::class,'faq']);