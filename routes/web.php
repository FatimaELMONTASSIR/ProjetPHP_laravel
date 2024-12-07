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


Route::get('/admin', function () {
    return view('LayoutAdmin/admin');
});

Route::get('/tables', function () {
    return view('LayoutAdmin/tables');
});

Route::get('/login', function () {
    return view('LayoutAdmin/login');
});

Route::get('/register', function () {
    return view('LayoutAdmin/register');
});

Route::get('/cards', function () {
    return view('LayoutAdmin/cards');
});

