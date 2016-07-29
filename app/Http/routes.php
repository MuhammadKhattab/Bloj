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

Route::resource('article', 'ArticlesController');

Route::get('search/articles', 'QueriesController@searchArticles');

Route::get('magic','PagesController@magic');

Route::get('tags/{name}','QueriesController@searchByTag');

Route::get('tags', 'TagsController@index');
