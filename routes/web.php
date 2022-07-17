<?php

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

Auth::routes();

//


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/', 'App\Http\Controllers\AdminController@index')->name('admin');
    Route::resource("/news", App\Http\Controllers\AdminController::class);
    Route::resource("/users", App\Http\Controllers\AdminUserController::class);
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/news/{id}', [App\Http\Controllers\HomeController::class, 'show']);


