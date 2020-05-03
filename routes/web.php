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

Route::get('/', function () { return view('welcome'); });

Route::get('/youtube/{id}', function ($id) { return view('youtube',['id'=>$id]); });

Route::redirect('/here','/');

Route::get('users/{id}','Users@index');

Route::view('/mobile','mobiles');

Route::get('request','Users@checkRequest'); 

Route::view('/userview','user');
Route::post('/usercontroller','Users@submit');


