<?php
Route::get('/', 'PostController@index');
Route::get('/posts', 'PostController@index');
Route::get('post/{id}/detail', 'PostController@detail');

Route::get('/java_core', 'CategoryController@index');
Route::get('/java_web', 'CategoryController@index');
Route::get('/java_service', 'CategoryController@index');

Route::get('/contact', function () {
	return view('pages.contact');
});

// for filter
Route::get('category/{id}/posts', 'CategoryController@getPostsByCategoryID');
Route::get('user/{id}/posts', 'UserController@getPostsByUserID');
Route::get('user/{name}/posts', 'UserController@getPostsByUserID');
Route::get('category/{name}', 'CategoryController@getPostsByCategoryName');

//comment
Route::get('comment/create', 'CommentController@create');
Route::post('comment/create', 'CommentController@store');

Route::get('/category', 'CategoryController@index');
Route::get('/user', 'UserController@index');

Auth::routes();
// FOR AUTH
Route::get('/home', 'HomeController@index');

//  Route Middleware
Route::group(['prefix' => 'admin','middleware' => 'admin'],function()
{
	Route::get('/', function(){
		return view('admin.dashboard');		
	});
	Route::get('/posts', 'PostController@index');
	Route::get('/post/create', 'PostController@create');
	Route::post('/post/create', 'PostController@store');
	Route::get('/post/{id}/edit', 'PostController@edit');
	Route::post('/post/update', 'PostController@update');
	Route::get('/post/{id}/delete', 'PostController@destroy');
	
	// FOR CATEGORY
	Route::get('/category', 'CategoryController@index');
	Route::get('/category/create', 'CategoryController@create');
	Route::post('/category/create', 'CategoryController@store');
	Route::get('/category/{id}/edit', 'CategoryController@edit');
	Route::post('/category/update', 'CategoryController@update');
	Route::get('/category/{id}/delete', 'CategoryController@destroy');
	
	// FOR USER
	Route::get('/users', 'UserController@index');
	Route::get('/user/create', 'UserController@create');
	Route::get('/user/{id}/edit', 'UserController@edit');
	Route::post('/user/update', 'UserController@update');
	Route::get('/user/{id}/delete', 'UserController@destroy');
});