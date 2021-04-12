<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CategoryController;
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
Route::get('logout', [UserAuth::class,'logout']);

Route::resource('admin/auth', UserAuth::class);
						/*users*/
Route::resource('admin/users', UserController::class);
Route::post('admin/users/save', [UserController::class, 'store'])->name('users.store');
Route::post('admin/users/updaterole/{id}', [UserController::class, 'updaterole'])->name('users.updaterole');



					/*Role*/
Route::resource('admin/role', RoleController::class);

					/*category*/
Route::resource('admin/category', CategoryController::class);
Route::post('admin/category/save', [CategoryController::class, 'store'])->name('category.store');

					/*posts*/
Route::resource('admin/posts', PostController::class);
Route::post('admin/post/save', [PostController::class, 'store'])->name('post.store');

					/*pages*/
Route::resource('admin/pages', PagesController::class);
Route::post('admin/pages/save', [PagesController::class, 'store'])->name('pages.store');