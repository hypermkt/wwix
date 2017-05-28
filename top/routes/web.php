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

Route::get('/', 'StaticController@top');
Route::get('/features', 'StaticController@features');
Route::get('/subscriptions', 'StaticController@subscriptions');
Route::get('/templates', 'TemplateController@index');
Route::get('/support', 'StaticController@support');
