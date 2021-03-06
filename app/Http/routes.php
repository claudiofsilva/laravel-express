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

Route::get('/', 'IndexController@index');
Route::get('/post', 'PostController@index');


Route::get('teste/{nome}', 'TesteController@index');
Route::get('notas/', 'TesteController@notas');
Route::get('/testeposte', 'TesteController@post');