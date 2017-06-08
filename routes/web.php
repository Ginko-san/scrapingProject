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

Route::get('/home', 'HomeController@index')->name('home');

//Rutas de contact
Route::get('/contact', 'ContactUSController@contactUS')->name('contact');
Route::post('contact', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);


//Rutas de promociones
Route::group(['middleware' => ['web']], function(){
    Route::resource('/promociones', 'PromocionesController');
    Route::resource('/promociones/create','PromocionesController@create');
});
/*Route::get('/promociones', 'PromocionesController@index')->name('promociones');
Route::post('promociones', ['as'=>'promociones.create','uses'=>'PromocionesController@create']);
/*Route::group(['middleware' => ['web']], function(){
    Route::resource('/promocionesC', 'PromocionesController@create');
});*/


//Rutas de cupones
Route::group(['middleware' => ['web']], function(){
    Route::resource('/cupones', 'CuponesController');
});

