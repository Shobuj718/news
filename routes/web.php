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

Route::group(['namespace'=>'FrontEnd'], function(){
  Route::get('/','FrontController@index')->name('home');
  Route::get('category/{id}','FrontController@posts')->name('category');
  Route::get('single','FrontController@single_post')->name('single');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('ehsan-login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('ehsan-login', 'Auth\LoginController@login');


Route::group(['namespace'=>'BackEnd'], function(){
  Route::get('/','FrontController@index')->name('home');
  Route::get('category/{id}','FrontController@posts')->name('category');
  Route::get('single','FrontController@single_post')->name('single');


});

Route::group(['middleware' => 'auth'], function(){

	Route::group(['namespace'=>'BackEnd', 'prefix' => 'categori'], function(){
	  Route::get('/create', 'CategoryController@create')->name('category.create');
	  Route::post('/store', 'CategoryController@store')->name('category.store');
	});

});


