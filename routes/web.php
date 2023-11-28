<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
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
Route::get('/',[LoginController::class,'index'])->name('login');
Route::get('/loginadmin',[HomeController::class,'home'])->name('Dashboard');
Route::post('/loginadmin',[HomeController::class,'home'])->name('page');
Route::get('/register',[LoginController::class, 'register'])->name('register');

Route::get('/report/member',[HomeController::class,'showmember'])->name('reportmember');
