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

/*
|--------------------------------------------------------------------------
| welcome and other pages
|--------------------------------------------------------------------------
*/
Route::auth();

Route::get('/', 'PagesController@welcome');

Route::get('contact', 'PagesController@contact');

Route::get('about', 'PagesController@about');

Route::get('magic','PagesController@magic');

Route::get('search', 'QueriesController@search');

/*
|--------------------------------------------------------------------------
| articles
|--------------------------------------------------------------------------
*/
Route::resource('articles', 'ArticlesController');

/*
|--------------------------------------------------------------------------
| tags
|--------------------------------------------------------------------------
*/
Route::resource('tags', 'TagsController');

/*
|--------------------------------------------------------------------------
| users and admin
|--------------------------------------------------------------------------
*/
Route::resource('users', 'UsersController');

Route::get('profile', 'UsersController@profile');

Route::get('admin', 'UsersController@admin');

/*
|--------------------------------------------------------------------------
| settings
|--------------------------------------------------------------------------
*/
Route::get('settings', 'SettingsController@index');

Route::patch('settings/edit_password', 'SettingsController@updatePassword');

Route::patch('settings/edit_name', 'SettingsController@updateName');
