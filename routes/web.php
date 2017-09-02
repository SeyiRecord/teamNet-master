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


Route::get('/signUp', function () {
    return view('signUp');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/requestPassword', function () {
    return view('requestPassword');
});

Route::get('/viewprofile', function () {
    return view('viewProfile');
});

Route::get('/editprofile', function () {
    return view('editProfile');
});

Route::get('/createresearch', function () {
    return view('createResearch');
});

Route::get('/researchDetails', function () {
    return view('researchDetails');
});

Route::get('/listResearch', function () {
    return view('viewResearch');
});

Route::get('/editresearch', function () {
    return view('editResearch');
});