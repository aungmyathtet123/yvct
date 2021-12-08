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

Route::get('/','FrontendController@index')->name('homepage');

Route::middleware('auth')->name('backend.')->prefix('admin')->group(function (){
    Route::get('/dashboard','AdminController@index')->name('dashboard');
    Route::resource('/sitesetting','SiteSettingController');
    Route::resource('/article','ArticleController');
    Route::get('/article/student/{id}','ArticleController@student')->name('article');
    Route::get('/article/showdata/{id}','ArticleController@showdata')->name('showdata');
    Route::resource('/type','TypeController');
    Route::resource('/gallery','GalleryController');
    Route::resource('/video','VideoController');
    Route::resource('/about','AboutController');
});

Route::group(['prefix'=>'user','as'=>'frontend.'],function(){

    Route::get('/about','FrontendController@about')->name('about');
    Route::get('/contact','FrontendController@contact')->name('contact');
    Route::get('/course','FrontendController@course')->name('course');
    Route::get('/image','FrontendController@image')->name('image');
    Route::get('/teacher','FrontendController@teacher')->name('teacher');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');


