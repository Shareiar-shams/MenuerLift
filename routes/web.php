<?php

Route::group(['namespace' => 'User'], function()
{
	Route::get('/', 'HomeController@index');
	Route::get('post/{post?}', 'PostController@post')->name('post');
	Route::get('post/tag/{tag}', 'HomeController@tag')->name('tag');
	Route::resource('question', 'AskController');
	Route::resource('about', 'AboutController');
	Route::resource('usercontact', 'ContactController');
	Route::resource('profile', 'ProfileController');
	Route::resource('weather', 'WeatherController');

	

	

	Route::get('post/category/{category}', 'HomeController@category')->name('category');
	
});


Route::group(['namespace' => 'Admin'], function(){
	Route::get('admin/home', 'HomeController@home')->name('admin.home');
	
	//User Routes
	
	Route::resource('admin/user' , 'UserController');

	//Role Routes
	
	Route::resource('admin/role' , 'RolerController');

	//Permission Routes
	
	Route::resource('admin/permission' , 'PermissionController');

	//Post Routes
	Route::resource('admin/post' , 'PostController');

	//Tag Routes
	Route::resource('admin/tag' , 'TagController');

	//Category Routes
	Route::resource('admin/category' , 'CategoryController');

	Route::resource('admin/logo' , 'LogoController'); 

	Route::resource('admin/about' , 'AboutController');

	Route::resource('admin/contact' , 'ContactController');



	//Admin auth
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
