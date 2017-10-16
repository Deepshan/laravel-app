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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::post('welcome', ['uses' => 'WelcomeController@add', 'prefix' => 'hello'] );

Route::get('welcome', ['uses' => 'WelcomeController@hello', 'prefix' => 'hello']);

//Route::get('welcome/edit', array('uses' => 'WelcomeController@edit', 'as' => 'users.edit'));

//Route::get('welcome/edit/{index}', array('uses' => 'WelcomeController@editStu', 'as' => 'users.add'));
Route::get('hello/add', array('uses' => 'WelcomeController@show', 'as' => 'users.show'));

Route::get('hello/edit', array('uses' => 'WelcomeController@editStud', 'as' => 'users.add'));

Route::post('update', array('uses' => 'WelcomeController@updateStu', 'as' => 'users.add'));

Route::get('delete/{index}', array('uses' => 'WelcomeController@delete', 'as' => 'users.delete'));








