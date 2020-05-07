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

// Route::view('/mobile','mobiles')->middleware('Indian');
// Route::view('/mobile','mobiles')->middleware('ageChecker');

Route::get('request','Users@checkRequest'); 

Route::view('/userview','user');
Route::post('/usercontroller','Users@submit');

//  check  the age with  middleware 
Route::get("checkAge",'Users@checkAge')->middleware('ageChecker'); 

/* set flash data after  submit  this  */

Route::get('registration','Users@registration_view'); 
Route::post('register','Users@register');

Route::get('db','Users@dbCheck'); 

Route::get('checkJoin','Users@checkJoin'); 

Route::get('check_modal','Users@check_modal'); 

Route::get('list','Users@companies_list'); 

Route::get('sendmail','Users@sendmail');