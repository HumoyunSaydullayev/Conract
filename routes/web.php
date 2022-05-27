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
})->name('boshsahifa');

Route::get('/chiqish', [HomeController::class, "chiqish"])->name('chiqish');

Route::get('/login_user', [HomeController::class, 'check'])->name('check');

Route::get('pdf', [HomeController::class, 'getPdf'])->name('pdf');

Route::get('admin', function () {
    return view('Admin.Login_Admin');
});

Route::post('/login_Admin', [HomeController::class, 'open_admin'])->name('admin');

Route::get('/home', [HomeController::class, 'index'])->name('home');
