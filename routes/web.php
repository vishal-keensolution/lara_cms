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

//Route::view('admin/login', 'admin.login');
Route::post('/admin/user', [UserAuth::class,'userLogin']);

Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user',null);
    }
    return redirect('admin/login');
});

Route::get('/admin/login', function () {
    if(session()->has('user'))
    {
        return redirect('admin');
    }
    return view('admin.login');
});

Route::get('/admin', function () {

    if(session()->has('user'))
    {
        return view('admin.dashboard');
    }
    return redirect('admin/login');
});

Route::resource('admin/users', UserController::class);
Route::resource('admin/role', RoleController::class);
Route::post('admin/users/save', [UserController::class, 'store'])->name('users.store');

