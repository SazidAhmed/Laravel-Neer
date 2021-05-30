<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => ['auth', 'has.permission']], function () {
	
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

		Route::get('/', function () {
			return view('dashboard');
		});

		Route::get('dashboard', function () {
			return view('dashboard');
		})->name('dashboard');
	
	Route::resource('leaves','LeaveController');
	Route::post('approve/{id}','LeaveController@acceptReject')->name('accept.reject');
	
	
	
	//User Routes
	// Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::resource('user', 'UserController');
	Route::resource('family','FamilyController');
	Route::resource('emergency','EmergencyController');
	Route::resource('extra','ExtrainfoController');
	Route::resource('info','UserinfoController');

	Route::resource('roles','RoleController');

	//Payment Route
	Route::resource('payment','PaymentController');

	Route::resource('notice','NoticeController');
});



//components