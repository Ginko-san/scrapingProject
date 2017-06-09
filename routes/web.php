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

Auth::routes();

Route::get('login/auth/facebook', 'Auth\RegisterController@redirectToProvider')->name('fb.register');
Route::get('login/auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactUSController@contactUS')->name('contact');
Route::post('contact', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

