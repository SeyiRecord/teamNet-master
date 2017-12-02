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
Route::get('/userprofiles/show/{id}', 'UserprofileController@show');
Route::post('/userprofiles/createuserprofile', 'UserprofileController@store');
Route::post('userType','UserController@userType')->name('userType');
Route::resource('userprofiles','UserprofileController');


Route::get('/orgprofiles/createorgprofile', 'OrgprofileController@create');
Route::get('/orgprofiles/editorgprofile/{id}', 'OrgprofileController@edit');
Route::get('/orgprofiles/showorg/{id}', 'OrgprofileController@show');
Route::resource('orgprofiles','OrgprofileController');

Route::get('/createresearch', 'ResearchController@create');
Route::get('/researches/editresearch/{id}', 'ResearchController@edit');
Route::post('/researches/store', 'ResearchController@store');
Route::resource('/researches', 'ResearchController');

Route::get('/participations/{id}', 'ParticipationController@save');
Route::get('/participations/edit/{id}', 'ParticipationController@edit');
Route::get('/participations/update/{id}', 'ParticipationController@updateRecord');
Route::resource('participations', 'ParticipationController');


Route::group(['middleware' => ['web']], function() {
	Route::get("roles/create", "RolesController@store");
});

Route::resource('/posts', 'PostController');
Route::post('/posts/update/{id}', 'PostController@update')->name('posts.update');
Route::get('/posts/destroy/{id}', 'PostController@destroy')->name('posts.destroy');

Route::post('/users/search', 'SearchController@user');
Route::post('/researches/search', 'SearchController@research');

Route::resource('users', 'UserController');
Route::resource('adminpanel', 'AdminpanelsController');
Route::get('search', array('as' => 'search', 'uses' => 'AdminpanelsController@search'));

// Route::get('/connections', function () {return view('connections/index');});
Route::get('/connections', 'UserprofileController@showConnections');
Route::get('/connections/{id}', 'UserprofileController@showConnections');

Route::post('comments/user/{user_id})', ['uses' => 'CommentsController@userComment', 'as' => 'comments.userComment']);
Route::post('comments/research/{research_id})', ['uses' => 'CommentsController@resComment', 'as' => 'comments.resComment']);
Route::post('comments/post/{post_id})', ['uses' => 'CommentsController@postComment', 'as' => 'comments.postComment']);
Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as'=> 'comments.edit']);
Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as'=> 'comments.update']);
Route::delete('comments/destroy/{id}', ['uses' => 'CommentsController@destroy', 'as'=> 'comments.destroy']);
Route::get('comments/delete/{id}', ['uses' => 'CommentsController@delete', 'as'=> 'comments.delete']);




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
