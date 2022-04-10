<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiteController;
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


Route::get('/', [SiteController::class, 'index']);

Route::get('/home', function(){
    return view('home');
});

// LOGIN ROUTE
Route::get('/login', function(){
    return view('login', ['status'=>""]);
});
Route::get('/login-error', function(){
    return view('login', ['status'=>"Email or Password Salah"]);
});
Route::post('/login-user', [UserController::class, 'login']);
// END LOGIN ROUTE

Route::get('/editKuliner', function() {
    return view('editKuliner');
});

// REGISTER ROUTE
Route::get('/register', function(){
    return view('register');
});
Route::post('/register-user', [UserController::class, 'create']);
// END REGISTER ROUTE