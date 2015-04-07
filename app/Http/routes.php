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

Route::get('/', 'PendaftaranWPController@index');

Route::get('home', 'HomeController@index');

Route::get('setuju/{id}', 'PendaftaranWPController@setuju');
Route::get('tolak/{id}', 'PendaftaranWPController@tolak');

Route::get('minta/add/{id}', 'PermintaanWPController@ajuMinta');
Route::post('minta/add/{id}', 'PermintaanWPController@add');
Route::get('minta/see/{id}', 'PermintaanWPController@seeMinta');
Route::get('minta/change', 'PermintaanWPController@cekMinta');
Route::get('minta/setuju/{id}', 'PermintaanWPController@setuju');
Route::get('minta/tolak/{id}', 'PermintaanWPController@tolak');
Route::get('lihatKelebihanPajak/{id}', 'WajibPajakController@viewLebihPajak');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
