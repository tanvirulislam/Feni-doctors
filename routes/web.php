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

Route::get('/clear', function() {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    return 'Cleared!';
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){

	Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('settings','SettingController@index')->name('settings');
    Route::put('profile-update/{id}','SettingController@updateProfile')->name('profile.update');
    Route::put('password-update','SettingController@updatePassword')->name('password.update');

	Route::get('/category','CategoryController@index')->name('category');
    Route::get('/category/add','CategoryController@create')->name('category.create');
    Route::post('/category/store','CategoryController@store')->name('category.store');
    Route::get('/category/edit/{id}','CategoryController@edit')->name('category.edit');
    Route::post('/category/update/','CategoryController@update')->name('category.update');
    Route::post('/category/delete/{id}','CategoryController@destroy')->name('category.delete');

    Route::get('/doctor','DoctorController@index')->name('doctor');
    Route::get('/doctor/add','DoctorController@create')->name('doctor.create');
    Route::post('/doctor/store','DoctorController@store')->name('doctor.store');
    Route::get('/doctor/edit/{id}','DoctorController@edit')->name('doctor.edit');
    Route::post('/doctor/update/','DoctorController@update')->name('doctor.update');
    Route::post('/doctor/delete/{id}','DoctorController@destroy')->name('doctor.delete');


	 });

Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'User','middleware'=>['auth','user']], function (){

	Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('settings','SettingController@index')->name('settings');
    Route::put('profile-update/{id}','SettingController@updateProfile')->name('profile.update');
    Route::put('password-update','SettingController@updatePassword')->name('password.update');

	 });

Route::group(['as'=>'agent.','prefix'=>'agent','namespace'=>'Agent','middleware'=>['auth','agent']], function (){

	Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('settings','SettingController@index')->name('settings');
    Route::put('profile-update/{id}','SettingController@updateProfile')->name('profile.update');
    Route::put('password-update','SettingController@updatePassword')->name('password.update');

	 });

Route::group(['as'=>'merchant.','prefix'=>'merchant','namespace'=>'Merchant','middleware'=>['auth','merchant']], function (){

	Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('settings','SettingController@index')->name('settings');
    Route::put('profile-update/{id}','SettingController@updateProfile')->name('profile.update');
    Route::put('password-update','SettingController@updatePassword')->name('password.update');

	 });

Route::group(['as'=>'vip.','prefix'=>'vip','namespace'=>'Vip','middleware'=>['auth','vip']], function (){

	Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('settings','SettingController@index')->name('settings');
    Route::put('profile-update/{id}','SettingController@updateProfile')->name('profile.update');
    Route::put('password-update','SettingController@updatePassword')->name('password.update');

	 });