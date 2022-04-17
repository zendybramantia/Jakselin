<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\User;

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
Route::get('/home', [HomeController::class, 'index']);

// LOGIN ROUTE
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login/auth', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
// END LOGIN ROUTE


Route::get('/kuliner', function(){
    return view('tambahKuliner');
});

Route::post('/kuliner/tambah', [KulinerController::class, 'store']);

Route::get('/kuliner/edit/{wisataKuliner}', [KulinerController::class, 'edit']);

Route::put('/kuliner/edit/{wisataKuliner}', [KulinerController::class, 'update']);

Route::put('/kuliner/hapus/{wisataKuliner}', [KulinerController::class, 'destroy']);


//User
Route::get('/User/create', [UserController::class, 'create'])->middleware('guest');

Route::post('/User/store', [UserController::class, 'store']);

Route::get('/User/profile', [UserController::class, 'index'])->middleware('auth');

Route::get('/User/profile/edit', [UserController::class, 'edit']);

Route::put('/User/profile/edit', [UserController::class, 'update']);

//Wisata
Route::get('/Wisata', [KulinerController::class, 'index']);

//show data
Route::get('/wisata', [KulinerController::class, 'index']);

Route::get('/wisata/{wisataKuliner}', [KulinerController::class, 'show']);

Route::get('/{category:name}', [CategoryController::class, 'index']);


//komentar
Route::post('/comment/post', [CommentController::class, 'store']);
//Dashboard
// Route::get('/dashboard', function(){
//     return view('Dashboard.home');
// });
// Route::get('/dashboard/categories', [DashboardController::class, 'index']);
Route::resource('/dashboard/categories', DashboardCategoryController::class);
// Route::get('/dashboard/user/{user:id}', [DashboardUserController::class, 'show']);
Route::resource('/dashboard/users', DashboardUserController::class);
Route::get('/dashboard/home', function(){
    $user = Auth::user();
    return view('Dashboard.home', [
        'user'=>$user
    ]);
});



