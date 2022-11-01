<?php

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

use App\Http\Controllers\AlunoController;

Route::get('/', [AlunoController::class, 'index'])->name('index');

Route::post('login/', 'AlunoController@login')->name('login');

Route::get('home/registro', 'AlunoController@mostrar')->name('mostrar');

Route::get('logout/', 'AlunoController@logout')->name('logout');



