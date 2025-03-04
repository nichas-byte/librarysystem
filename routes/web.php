<?php

use App\Http\Controllers\AdminController;
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
  
Route::post('/index',[AdminController::class,'bookStore'])->name('book.store');

Route::get('/show/{id}', [AdminController::class,'show'])->name('book.show');
//User
Route::get('adduser',[UserController::class,'index'])->name('user.form');

Route::post('/adduser',[UserController::class,'store'])->name('user.store');

Route::get('/show/{id}', [UserController::class,'show'])->name('user.show');
