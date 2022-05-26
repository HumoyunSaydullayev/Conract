<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\YonalishController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('talaba', function () {
    return view('User.Login_Talaba');
});

Route::get('admin', function () {
    return view('Admin.Login_Admin');
});

Route::get('user', function () {
    return view('User.User');
});

//Route::get('/login_user', [HomeController::class, 'check1']);
Route::post('/login_user', [HomeController::class, 'check'])->name('check');
Route::get('/yonalishlar', [HomeController::class, 'yonalish'])->name('yonalishTest');
Route::post('/login_Admin', [HomeController::class, 'open_admin'])->name('admin');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('yonalish', YonalishController::class);
