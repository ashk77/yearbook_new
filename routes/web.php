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
/*
--------------------------------------------------------------------------
Auth::routes()
--------------------------------------------------------------------------
	php artisan make:auth was used to create inbuilt login register and logout functonality of laravel
	login page is edited
*/
	


	Route::get('/yearbook', function () {
		return view('auth.login');
	});

	Auth::routes();
Route::get('yearbook/logout', '\App\Http\Controllers\Auth\LoginController@logout'); //Just added to fix issue

Route::get('/yearbook/home', 'HomeController@index')->name('home');
Route::get('/yearbook/profile_index', 'profile@index');
Route::get('/yearbook/profile_index/{roll}', 'profile@testimonials');
Route::post('/yearbook/search','HomeController@search');
Route::get('/yearbook/comment/{id}','ImageController@comment');



/*
--------------------------------------------------------------------------
FileController 
--------------------------------------------------------------------------
	It is used to upload pic and caption in the dashboard page.
	
*/

	Route::post('/yearbook/upload_pic_moto','FileController@upload_pic_moto');
	Route::post('/yearbook/writetestimony/{roll}','ViewsController@write');

	Route::get('/yearbook/upload_pic_moto','HomeController@index');


	Route::get('/yearbook/upload','ImageController@index');

	Route::post('/yearbook/upload','ImageController@upload');

	Route::get('/yearbook/details',function(){
		$user = App\User::get();
		$roll = Auth::user()->rollno;
		$notifications = App\views::where('depmate',$roll)->where('read','1')->get()->toArray();

		return view('details1',compact('user','notifications'));
	});
	Route::post('/yearbook/details','HomeController@edit');



	Route::get('/yearbook/writeup','WriteupController@index');

	Route::post('/yearbook/writeup','WriteupController@store');

	Route::get('/yearbook/writeup/{id}','WriteupController@delete');

	Route::post('/yearbook/updates','WriteupController@updates');
	Route::post('/yearbook/approve','ViewsController@approve');

	Route::get('/yearbook/approve/{id}','ViewsController@approval');
	Route::get('/yearbook/disapprove/{id}','ViewsController@disapproval');

	Route::get('/yearbook/read/{id}','ViewsController@read');

//route for navbar unseen testinomial from navbar.blade.php 
//go to profile.php controller

Route::get('/yearbook/updateread', 'profile@updateread');
Route::post('/yearbook/comment','CommentController@add');
Route::post('/yearbook/commentadd','CommentController@new');
Route::post('/yearbook/likes','LikesController@load');
Route::post('/yearbook/likeadd','LikesController@like');


//change password route referenced by navbar2.blade.php
//go to env file to change email and passord 
//go to config/mail from there change the from name and id
Route::get('/yearbook/send','mailController@send');


Route::get('/yearbook/invite', 'InviteController@invite')->name('invite');
Route::post('/yearbook/invite', 'InviteController@process')->name('process');
// {token} is a required parameter that will be exposed to us in the controller method
Route::get('/yearbook/accept/{token}', 'InviteController@accept')->name('accept');



//referenced by navbar2

Route::get('/yearbook/trending','CountController@index');


