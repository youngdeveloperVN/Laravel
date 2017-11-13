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

Route::get('/category', 'CategoryController@index');
Route::get('/user', 'UserController@index');

Auth::routes();
// FOR AUTH
Route::get('/home', 'HomeController@index');

// FOR ADMIN
Route::get('/admin', function () {
	return view('admin.dashboard');
});

// FOR POST
Route::get('/admin/post/create', 'PostController@create');
Route::post('/admin/post/create', 'PostController@store');
Route::get('/admin/post/{id}/edit', 'PostController@edit');
Route::post('/admin/post/update', 'PostController@update');
Route::get('/admin/post/{id}/delete', 'PostController@destroy');

// FOR CATEGORY
Route::get('/admin/category', 'CategoryController@index');
Route::get('/admin/category/create', 'CategoryController@create');
Route::post('/admin/category/create', 'CategoryController@store');
Route::get('/admin/category/{id}/edit', 'CategoryController@edit');
Route::post('/admin/category/update', 'CategoryController@update');
Route::get('/admin/category/{id}/delete', 'CategoryController@destroy');

// FOR USER
Route::get('/admin/users', 'UserController@index');
Route::get('/admin/user/create', 'UserController@create');
Route::get('/admin/user/{id}/edit', 'UserController@edit');
Route::post('/admin/user/update', 'UserController@update');
Route::get('/admin/user/{id}/delete', 'UserController@destroy');