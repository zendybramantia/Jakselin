<?php

use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EditUserController;
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

Route::get('/login', function(){
    return view('login');
});

Route::post('/login-user', [UserController::class, 'login']);

Route::get('/editKuliner', function() {
    return view('editKuliner');
});


//User
Route::get('/register', [UserController::class, 'create']);

Route::post('/register', [UserController::class, 'store']);

Route::get('/profile', [UserController::class, 'index']);

Route::get('/profile/edit', [UserController::class, 'edit']);

Route::put('/profile/edit', [UserController::class, 'update']);