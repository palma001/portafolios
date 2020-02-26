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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('dashboard')->group(function () {
	Route::get('/', 'HomeController@dashboard')->name('dashboard');
	Route::get('/users', 'UsersController@index')->name('users');
	Route::resource('equipment','EquipmentController');
	Route::get('/equipment', 'EquipmentController@index')->name('equipment');
	Route::resource('setting','SettingController');
	Route::get('settings', 'SettingController@index')->name('settings');
	Route::resource('newsletter','NewsletterController');
	Route::get('newsletters', 'NewsletterController@index')->name('newsletters');
});