<?php

use App\Http\Controllers\FrontController;
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

Route::get('/home', function () {
    return view('front_home');
});
Route::get('/', [FrontController::class,'home'])->name('front.home');
Route::get('/about', [FrontController::class,'about'])->name('front.about');
Route::get('/service', [FrontController::class,'service'])->name('front.service');
Route::get('/feature', [FrontController::class,'feature'])->name('front.feature');
Route::get('/team', [FrontController::class,'team'])->name('front.team');
Route::get('/appointment', [FrontController::class,'appointment'])->name('front.appointment');
Route::get('/testimonial', [FrontController::class,'testimonial'])->name('front.testimonial');
Route::get('/page404', [FrontController::class,'page404'])->name('front.page404');
Route::get('/contact', [FrontController::class,'contact'])->name('front.contact');