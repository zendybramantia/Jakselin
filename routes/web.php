<?php

use App\Http\Controllers\KulinerController;
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

// LOGIN ROUTE
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login/auth', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
// END LOGIN ROUTE


Route::get('/kuliner', function(){
    return view('tambahKuliner');
});

Route::post('/kuliner/tambah', [KulinerController::class, 'store']);

Route::get('/editKuliner', function() {
    return view('editKuliner');
});


//User
Route::get('/User/create', [UserController::class, 'create'])->middleware('guest');

Route::post('/User/store', [UserController::class, 'store']);

Route::get('/User/profile', [UserController::class, 'index']);

Route::get('/User/profile/edit', [UserController::class, 'edit']);

Route::put('/User/profile/edit', [UserController::class, 'update']);


