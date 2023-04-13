<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
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

Route::get('about', function () {
   return view('about');
});

Route::get('features', function () {
   return view('features');
});


Route::get('user_list', [UserController::class,'index']); // PSR4
Route::get('user_add', [UserController::class,'create']); // PSR4
Route::post('user_add', [UserController::class,'store']); // PSR4


Route::get('contact', [ContactController::class,'index']);
Route::get('contact/{id}', [ContactController::class,'show']);
Route::get('contactEdit/{id}', [ContactController::class,'edit']);
Route::get('contactDelete/{id}', [ContactController::class,'destroy']);
Route::get('contact_add', [ContactController::class,'create']);
Route::post('contact_store', [ContactController::class,'store']); // PSR4
Route::post('contactUpdate', [ContactController::class,'update']); // PSR4


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
