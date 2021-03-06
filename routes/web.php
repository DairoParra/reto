<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {return view('home');})
    ->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')->name('login.destroy');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')->name('admin.index');

Route::get('/admin/{user}', [AdminController::class, 'show'])
    ->middleware('auth.admin')->name('admin.show');

Route::get('admin/{user}/edit', [AdminController::class, 'edit'])
    ->middleware('auth.admin')->name('admin.edit');

Route::put('admin/{user}', [AdminController::class, 'update'])
    ->middleware('auth.admin')->name('admin.update');

/*Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth','verified')->name('verification.notice');*/
