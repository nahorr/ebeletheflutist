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
Route::post('/postcontactform', 'HomePublic\HomeController@postContactForm');
Route::get('/musicflutetrainingtipsbyebele', 'HomePublic\HomeController@musicFluteTrainingTipsByEbele');
Route::get('/musicflutetrainingtipsbyebeletip/{tip}', 'HomePublic\HomeController@musicFluteTrainingTipsByEbeleTip');
Route::get('/wordsbyebele', 'HomePublic\WordsController@WordsByEbele');
Route::get('/showwordsbyebele/{word}', 'HomePublic\WordsController@showWordsByEbele');

Auth::routes();

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/home', 'HomeController@index')->name('home');

//Admin Area
Route::group(['middleware' => 'admin'], function () { 

  Route::get('/admin/home', 'Admin\HomeController@index');

  //tips
  Route::get('/admin/tips/showtips', 'Admin\TipsController@showTips')->name('showtips');
  Route::get('/admin/tips/addtip', 'Admin\TipsController@addTip');
  Route::post('/admin/tips/postaddtip', 'Admin\TipsController@postAddTip');
  Route::get('/admin/tips/edittip/{tip}', 'Admin\TipsController@editTip');
  Route::post('/admin/tips/postedittip/{tip}', 'Admin\TipsController@postEditTip');
  Route::get('/admin/tips/deletetip/{tip}', 'Admin\TipsController@deleteTip');

  //Words
  Route::get('/admin/words/showwords', 'Admin\WordsController@showWords')->name('showwords');
  Route::get('/admin/words/addword', 'Admin\WordsController@addWord');
  Route::post('/admin/words/postaddword', 'Admin\WordsController@postAddWord');
  Route::get('/admin/words/editword/{word}', 'Admin\WordsController@editWord');
  Route::post('/admin/words/posteditword/{word}', 'Admin\WordsController@postEditWord');
  Route::get('/admin/words/deleteword/{word}', 'Admin\WordsController@deleteWord');

  //videos
  Route::get('/admin/videos/showvideos', 'Admin\VideosController@showVideos')->name('showvideos');
  Route::get('/admin/videos/addvideo', 'Admin\VideosController@addVideo');
  Route::post('/admin/videos/postaddvideo', 'Admin\VideosController@postAddVideo');
  Route::get('/admin/videos/editvideo/{video}', 'Admin\VideosController@editVideo');
  Route::post('/admin/videos/posteditvideo/{video}', 'Admin\VideosController@postEditVideo');
  Route::get('/admin/videos/deletevideo/{video}', 'Admin\VideosController@deleteVideo');
  
});