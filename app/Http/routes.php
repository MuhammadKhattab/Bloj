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

Route::auth();

Route::get('/', 'PagesController@welcome');

Route::get('contact', 'PagesController@contact');

Route::get('about', 'PagesController@about');

Route::get('magic','PagesController@magic');


Route::get('search/articles', 'QueriesController@searchArticles');


Route::resource('articles', 'ArticlesController');

Route::resource('tags', 'TagsController');

Route::resource('users', 'UsersController');
