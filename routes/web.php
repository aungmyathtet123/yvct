<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix'=>'admin','as'=>'backend.'],function(){
    Route::get('/dashboard','AdminController@index')->name('dashboard');
    Route::resource('/sitesetting','SiteSettingController');
    Route::resource('/article','ArticleController');
    Route::get('/article/student/{id}','ArticleController@student')->name('article');
    Route::get('/article/showdata/{id}','ArticleController@showdata')->name('showdata');
    Route::resource('/type','TypeController');
    Route::resource('/gallery','GalleryController');
    Route::resource('/video','VideoController');



});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');
