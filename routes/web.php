<?php

use App\Http\Controllers\KulinerController;
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

Route::get('/login', function(){
    return view('login');
});

Route::post('/login-user', [UserController::class, 'login']);

Route::get('/register', function(){
    return view('register');
});

Route::post('/register-user', [UserController::class, 'create']);

// Route::get('/tambah-kuliner', [KulinerController::class, 'index']);

Route::get('/kuliner', function(){
    return view('tambahKuliner');
});

Route::post('/kuliner/tambah', [KulinerController::class, 'store']);