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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/user', 'UserController' );

Route::get('/requestpassword', function () {
    return view('requestPassword');
});
Route::get('/Profile', function () {
    return view('Profile');
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

Route::get('/researchdetails', function () {
    return view('researchDetails');
});

Route::get('/listresearch', function () {
    return view('viewResearch');
});

Route::get('/editresearch', function () {
    return view('editResearch');
});
