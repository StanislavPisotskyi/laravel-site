<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Static pages

Route::get('contact', 'PagesController@getContact');

Route::get('about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');

//Posts

Route::resource('posts', 'PostController');

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');

Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

Route::get('wall/{id}', [ 'uses' => 'BlogController@getWall', 'as' => 'wall']);

Route::get('popular', [ 'uses' => 'BlogController@getPopular', 'as' => 'popular']);

//Auth

Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

//Reg

Route::get('auth/register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);

Route::post('auth/register', 'Auth\AuthController@postRegister');

//Pass reset

Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');

Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');

Route::post('password/reset', 'Auth\PasswordController@reset');

//Categories

Route::resource('categories', 'CategoryController', ['except' => ['create']]);

//Comments

Route::resource('comments', 'CommentsController');
