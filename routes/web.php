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

Route::get('/', function () {
    return view('dashboard.courses.index');
});


Route::get('/create', function () {
    return view('dashboard.courses.create');
});


Route::get('login', function () {
    return view('dashboard.auth_user.login');
});


Route::get('login/admin', function () {
    return view('dashboard.auth_admin.login');
});


Route::get('register', function () {
    return view('dashboard.auth_user.register');
});

Route::get('home', function () {
    return view('dashboard.home.home');
});
