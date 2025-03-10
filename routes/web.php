<?php

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

Route::get('/', function () {return view('welcome');});

Route::get('/beranda', function () {return view('beranda');});

Route::get('/profil', function () {return view('profil');});

Route::get('/status', function () {return view('status');});

Route::get('/grup', function () {return view('grup');});

Route::get('/kontak', function () {return view('kontak');});
