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

Route::get('/', 'HomeController@index');
Route::get('/hello', 'HomeController@hello');
Route::get('/contact', 'HomeController@contact');

Route::get('/project','ProjectController@index');

Route::prefix('tasks')->middleware('auth')->group(function () {
  
  Route::get('/','TaskController@index');

  Route::get('/create','TaskController@create');

  Route::post('/','TaskController@store');

  Route::get('/{task}','TaskController@show');

  Route::get('/{task}/edit','TaskController@edit');

  Route::put('/{task}', 'TaskController@update');

  Route::delete('/{task}','TaskController@destroy');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/veritas','VeritasController@index');

Route::get('/bonds', 'BondsController@index');

Route::get('/bonds/create', 'BondsController@create');

Route::post('/bonds', 'BondsController@store');

Route::get('/bonds/{bond}/edit', 'BondsController@edit');

Route::put('/bonds/{bond}', 'BondsController@update');

Route::delete('/bonds/{bond}' ,'BondsController@destroy');

//Route::prefix('veritas')->group(function(){
//
//    Router::get('/','VeritasController@index');
//    
//});