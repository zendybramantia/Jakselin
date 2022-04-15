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
Route::get('/login', function(){
    return view('login', ['status'=>""]);
});
Route::get('/login-error', function(){
    return view('login', ['status'=>"Email or Password Salah"]);
});
Route::post('/login-user', [UserController::class, 'login']);
// END LOGIN ROUTE


Route::get('/kuliner', function(){
    return view('tambahKuliner');
});

Route::post('/kuliner/tambah', [KulinerController::class, 'store']);

Route::get('/editKuliner', function() {
    return view('editKuliner');
});


//User
Route::get('/register', [UserController::class, 'create']);

Route::post('/register', [UserController::class, 'store']);

Route::get('/profile', [UserController::class, 'index']);

Route::get('/profile/edit', [UserController::class, 'edit']);

Route::put('/profile/edit', [UserController::class, 'update']);

Route::post('/register-user', [UserController::class, 'create']);

//show data
Route::get('/wisata', [KulinerController::class, 'index']);

Route::get('/wisata/{wisataKuliner}', [KulinerController::class, 'show']);

Route::get('/{category:name}', function (Category $category) {
    return view('category', [
        'wisatas' => $category->wisatakuliner,
        'category' => $category->name
    ]);
});



