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
use App\Event;
Route::get('/', 'PagesController@index');
Route::get('/articles', [
	'as' => 'article.index',
	'uses' => 'ArticlesController@index'
	]);

Route::get('/articles/xxx', [
	'as' => 'article.xxx',
	'uses' => 'ArticlesController@xxx'
	]);

Route::get('/articles/create', [
	'as' => 'article.create',
	'uses' => 'ArticlesController@create'
	]);

Route::post('/articles', [
	'as' => 'article.store',
	'uses' => 'ArticlesController@store'
	]);

Route::get('/articles/{id}/edit', [
	'as' => 'article.edit',
	'uses' => 'ArticlesController@edit'
	]);

Route::put('/article/{id}', [
	'as' => 'article.update',
	'uses' => 'ArticlesController@update'
	]);

Route::delete('/articles/{id}', [
	'as' => 'article.destroy',
	'uses' => 'ArticlesController@destroy'
	]);

Route::get('/article/{id}',[
	'as'   => 'article.show',
	'uses' => 'ArticlesController@show'
	]
 );
Route::get('/event/{id}', 'EventsController@detail');

// View::composer('events.index', function($view){
// 	$events = Event::all();
// 	$view->with('events', $events);
// });
