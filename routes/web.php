<?php

use App\Http\Controllers\Agama88Controller;
use App\Http\Controllers\Data88Controller;
use App\Http\Controllers\Login88Controller;
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

// Login & Register
Route::get('/registeruserbaru88', [Login88Controller::class, 'registeruserbaru88']);
Route::post('/prosesregisteruserbaru88', [Login88Controller::class, 'prosesregisteruserbaru88']);
Route::get('/loginuserbaru88', [Login88Controller::class, 'loginuserbaru88'])->name('loginuserbaru88');
Route::post('/prosesloginuserbaru88', [Login88Controller::class, 'prosesloginuserbaru88']);
Route::get('/logoutuserbaru88', [Login88Controller::class, 'logoutuserbaru88']);
Route::get('/forget88', [Login88Controller::class, 'forget88']);
Route::post('/prosesreset88', [Login88Controller::class, 'prosesreset88']);

// Data
Route::get('/', [Data88Controller::class, 'data88'])->middleware('auth')->middleware('active')->middleware('admin');
Route::get('/profil88/{id}', [Data88Controller::class, 'adddata88'])->middleware('auth')->middleware('active');
Route::get('/edit88/{$b->id}', [Data88Controller::class, 'editData88'])->middleware('auth')->middleware('active')->name('/edit88/{$b->id}');
Route::post('/prosesedit88/{id}', [Data88Controller::class, 'prosesedit88'])->middleware('auth')->middleware('active');
Route::get('/delete88/{id}', [Data88Controller::class, 'hapus88'])->middleware('auth')->middleware('active');
Route::post('/update88/{id}', [Data88Controller::class, 'ganti88'])->middleware('auth')->middleware('active');

// Agama
Route::get('/tambahagama88', [Agama88Controller::class, 'addAgama88'])->middleware('auth')->middleware('admin');
Route::post('/prosestambahagama88', [Agama88Controller::class, 'prosestambah88'])->middleware('auth')->middleware('admin');
Route::get('/dataagama88', [Agama88Controller::class, 'data88'])->middleware('auth')->middleware('admin');
Route::get('/deleteagama88/{id}', [Agama88Controller::class, 'delete88'])->middleware('auth')->middleware('admin');

// Active
Route::get('/activator88', [Data88Controller::class, 'activator88'])->middleware('auth')->middleware('admin');
Route::get('/aktif88/{id}', [Data88Controller::class, 'aktif88'])->middleware('auth')->middleware('admin');
Route::get('/nonaktif88/{id}', [Data88Controller::class, 'nonaktif88'])->middleware('auth')->middleware('admin');
