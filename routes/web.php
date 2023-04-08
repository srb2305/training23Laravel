<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('contact', function () {
   return view('contact');
});

Route::get('contact/{id}', function () {
   return view('contact');
});

Route::get('features', function () {
   return view('features');
});


Route::get('user_list', [UserController::class,'index']); // PSR4
Route::get('user_add', [UserController::class,'create']); // PSR4


