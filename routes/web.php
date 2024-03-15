<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
     return view('welcome');

});

Route::get('/admin/login',[AdminController::class,'loginForm'])
    ->name('admin.loginForm');

Route::post('/admin/login',[AdminController::class,'login'])
    ->name('admin.login');

Route::post('/admin/logout',[AdminController::class,'logout'])
    ->name('admin.logout')
    ->middleware('auth:admin');
