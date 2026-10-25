<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
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


Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class, 'registerPost'])->name('register');
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'loginPost'])->name('login');



Route::get('/',[HomeController::class,'index']);



Route::get('/addrooms',[RoomsController::class,'index'])->name('add')->middleware(['auth','user']);
Route::post('/addrooms',[RoomsController::class, 'roomPost'])->name('add')->middleware(['auth','user']);

Route::get('/reservation',[ReservationController::class,'index'])->name('make');
Route::get('/search',[ReservationController::class,'searchT']);

Route::get('/room',[BookController::class, 'bookPost'])->name('sult');
Route::post('/room',[BookController::class, 'ResPost'])->name('sult');

Route::get('/comment',[CommentController::class, 'index'])->name('comm');
Route::post('/comment',[CommentController::class, 'post'])->name('comm');

