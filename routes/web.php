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
Route::get('/equipment/{id}', 'EquipmentController@show');

Route::prefix('dashboard')->group(function () {
	//Dashboard
	Route::get('/', 'HomeController@dashboard')->name('dashboard');
	
	// Users
	Route::resource('users','UsersController');
	Route::get('/users', 'UsersController@index')->name('users');

	//Equipments
	Route::resource('equipment','EquipmentController');
	Route::get('/equipment', 'EquipmentController@index')->name('equipment');

	// Settings
	Route::resource('setting','SettingController');
	Route::get('settings', 'SettingController@index')->name('settings');

	//Newsletters
	Route::resource('newsletter','NewsletterController');
	Route::get('newsletters', 'NewsletterController@index')->name('newsletters');
});