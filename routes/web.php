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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/signUp', function () {
    return view('signUp');
});

Route::get('/requestPassword', function () {
    return view('requestPassword');
});

Route::get('/profile', function () {
    return view('editProfile');
});


Route::get('/research', function () {
    return view('research');
});

Route::get('/createresearch', function () {
    return view('createResearch');
});