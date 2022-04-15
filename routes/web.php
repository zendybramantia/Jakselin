<?php

use App\Http\Controllers\KulinerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

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



Route::get('/', [HomeController::class, 'index']);

// LOGIN ROUTE
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
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

Route::get('/User/profile', [UserController::class, 'index'])->middleware('auth');

Route::get('/User/profile/edit', [UserController::class, 'edit']);

Route::put('/User/profile/edit-user', [UserController::class, 'update']);

//Wisata
Route::get('/Wisata', [KulinerController::class, 'index']);

//show data
Route::get('/wisata', [KulinerController::class, 'index']);

Route::get('/wisata/{wisataKuliner}', [KulinerController::class, 'show']);

Route::get('/{category:name}', function (Category $category) {
    return view('category', [
        'wisatas' => $category->wisatakuliner,
        'category' => $category->name
    ]);
});



