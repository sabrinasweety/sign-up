<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::post('/dologin',[HomeController::class,'dologin'])->name('dologin');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');

