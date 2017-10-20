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
Route::get('/orghome', 'OrghomeController@index')->name('orghome');
Route::get('/usertype', function () {return view('usertype');});

Route::get('/requestpassword', function () {return view('requestPassword');});

Route::resource('/user', 'UserController' );

Route::get('/userprofiles/createuserprofile', 'UserprofileController@create');
Route::get('/userprofiles/edituserprofile/{id}', 'UserprofileController@edit');
Route::get('/userprofiles/showuser/{id}', 'UserprofileController@show');
Route::post('/userprofiles/createuserprofile', 'UserprofileController@store');
Route::post('userType','UserController@userType')->name('userType');
Route::resource('userprofiles','UserprofileController');


Route::get('/orgprofiles/createorgprofile', 'OrgprofileController@create');
Route::get('/orgprofiles/editorgprofile/{id}', 'OrgprofileController@edit');
Route::get('/orgprofiles/showorg/{id}', 'OrgprofileController@show');
Route::resource('orgprofiles','OrgprofileController');

Route::get('/createresearch', 'ResearchController@create');
Route::get('/researches/showresearch/{id}', 'ResearchController@show');
Route::get('/researches/editresearch/{id}', 'ResearchController@edit');
Route::post('/researches/store', 'ResearchController@store');
Route::resource('/researches', 'ResearchController');

Route::get('/participations/{id}', 'ParticipationController@save');
Route::get('/participations/editparticipations/{id}', 'ParticipationController@edit');





/*
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
});*/
