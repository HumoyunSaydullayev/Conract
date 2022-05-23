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
Route::get('/', function () {
    return view('User.Login_Talaba');
});

Route::post('/login_user', [HomeController::class, 'check'])->name('check');
Route::get('/login_open', [HomeController::class, 'open_check']);
Route::get('/login_Admin', [HomeController::class, 'admin']);
Route::post('/open_Admin', [HomeController::class, 'open_admin'])->name('admin');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('yonalish', YonalishController::class);
