<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserAuth;

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
Route::get('/admin', [UserAuth::class,'home']);
Route::get('/admin/login', [UserAuth::class,'login']);
Route::post('/admin/check', [UserAuth::class,'check']);
Route::get('/admin/logout', [UserAuth::class,'logout']);


Route::resource('admin/users', UserController::class);
Route::resource('admin/auth', UserAuth::class);
Route::resource('admin/role', RoleController::class);
Route::post('admin/users/save', [UserController::class, 'store'])->name('users.store');

