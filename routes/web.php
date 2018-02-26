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

Route::get('/', 'HomePublic\HomeController@index')->name('homepublic');
Route::get('/music', 'HomePublic\HomeController@music');
Route::get('/music/audios', 'HomePublic\HomeController@musicAudios');
Route::get('/music/videos', 'HomePublic\HomeController@musicAudios');
Route::get('/music/audios', 'HomePublic\HomeController@musicVideos');
Route::get('/music/training', 'HomePublic\HomeController@musicTraining');
Route::get('/about', 'HomePublic\HomeController@about');
Route::get('/contact', 'HomePublic\HomeController@contact');
Route::get('/musicflutetrainingtipsbyebele', 'HomePublic\HomeController@musicFluteTrainingTipsByEbele');

Auth::routes();

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/home', 'HomeController@index')->name('home');

//Admin Area
Route::group(['middleware' => 'admin'], function () { 

  Route::get('/admin/home', 'Admin\HomeController@index'); 
  
});