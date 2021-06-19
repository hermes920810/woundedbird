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

// Route::get('/', 'CleanController@index')->name('landing');

Route::group([], function (){
	Route::get('/', 'CleanController@index')->name('landing');
	Route::get('/blogs', 'CleanController@blogs')->name('blogs');
	Route::get('/services', 'CleanController@services')->name('services');
	Route::get('/contact-us', 'CleanController@contact_us')->name('contact_us');
	Route::get('/portfolios', 'CleanController@portfolios')->name('portfolios');
	Route::get('/team-member', 'CleanController@team_member')->name('team_member');
	Route::get('/gallery', 'CleanController@gallery')->name('gallery');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
