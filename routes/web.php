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
    return view('index');
});
Route::get('index', function () {
    return view('index');
});

Route::get('about', function () {
   return view('about');
});

Route::get('contact', function () {
   return view('contact');
});

Route::get('blog', function () {
   return view('blog');
});

Route::get('course', function () {
   return view('course');
});

Route::get('single', function () {
   return view('single');
});

Route::get('teacher', function () {
   return view('teacher');
});


Route::get('user_list', [UserController::class,'index']); // PSR4
Route::get('user_add', [UserController::class,'create']); // PSR4
//Route::get('user_show/{id}', [UserController::class,'show']); // PSR4
Route::post('user_add', [UserController::class,'store']); // PSR4


Route::get('enquries', [ContactController::class,'getEnquriey']);
Route::get('contact_list', [ContactController::class,'index']);
Route::get('contact/{id}', [ContactController::class,'show']);
Route::get('contactEdit/{id}', [ContactController::class,'edit']);
Route::get('contactDelete/{id}', [ContactController::class,'destroy']);
Route::get('contact_add', [ContactController::class,'create'])->name('addcontact');
Route::post('contact_store', [ContactController::class,'store']); // PSR4
Route::post('contactUpdate', [ContactController::class,'update']); // PSR4


Auth::routes(); // login registration change_password forget password

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('IsUser');

Route::get('/testmail',function(){
	return view('mail.test');
} );
Route::get('/sendMail', [App\Http\Controllers\HomeController::class, 'sendMail']);
