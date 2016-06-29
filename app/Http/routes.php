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


Route::get('/', array('uses' => 'PostController@index'));
Route::get('/admin',array('uses' => 'AdminController@showUsuarios'));
Route::get('/admin/usuarios',array('uses'=> 'AdminController@showFormUsuarios'));
Route::post('/admin/usuarios',array('uses'=> 'AdminController@saveUsuario'));
Route::get('/admin/usuarios/edit/{id}',array('uses'=> 'AdminController@showFormUsuarios'));
Route::post('/admin/usuarios/edit/{id}',array('uses'=> 'AdminController@editUsuario'));
Route::get('/admin/usuarios/delete/{id}',array('uses'=> 'AdminController@deleteUsuario'));




