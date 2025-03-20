<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index',[AdminController::class,'index'])->name('index');
  
Route::get('add-book',[AdminController::class,'create'])->name('book.create');
Route::post('/index',[AdminController::class,'bookStore'])->name('book.store');

Route::get('/show', [AdminController::class,'show'])->name('book.show');

Route::delete('book-delete/{id}',[AdminController::class,'deleteBook']);
//User
Route::get('add-user',[UserController::class,'create'])->name('user.create');

// Route::get('adduser',[UserController::class,'index'])->name('user.form');

Route::post('/adduser',[UserController::class,'store'])->name('user.store');

Route::get('/show-user', [UserController::class,'showuser'])->name('user.show');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
