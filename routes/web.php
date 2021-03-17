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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Front\FrontController@front')->name('index');


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

    Route::get('/hospital','HospitalController@index')->name('hospital');
    Route::get('/hospital/add','HospitalController@create')->name('hospital.create');
    Route::post('/hospital/store','HospitalController@store')->name('hospital.store');
    Route::get('/hospital/edit/{id}','HospitalController@edit')->name('hospital.edit');
    Route::post('/hospital/update/','HospitalController@update')->name('hospital.update');
    Route::post('/hospital/delete/{id}','HospitalController@destroy')->name('hospital.delete');

    Route::get('/fire-service','FireServiceController@index')->name('fire-service');
    Route::get('/fire-service/add','FireServiceController@create')->name('fire-service.create');
    Route::post('/fire-service/store','FireServiceController@store')->name('fire-service.store');
    Route::get('/fire-service/edit/{id}','FireServiceController@edit')->name('fire-service.edit');
    Route::post('/fire-service/update/','FireServiceController@update')->name('fire-service.update');
    Route::post('/fire-service/delete/{id}','FireServiceController@destroy')->name('fire-service.delete');

    Route::get('/ambulance','AmbulanceController@index')->name('ambulance');
    Route::get('/ambulance/add','AmbulanceController@create')->name('ambulance.create');
    Route::post('/ambulance/store','AmbulanceController@store')->name('ambulance.store');
    Route::get('/ambulance/edit/{id}','AmbulanceController@edit')->name('ambulance.edit');
    Route::post('/ambulance/update/','AmbulanceController@update')->name('ambulance.update');
    Route::post('/ambulance/delete/{id}','AmbulanceController@destroy')->name('ambulance.delete');

    Route::get('/police','policeController@index')->name('police');
    Route::get('/police/add','policeController@create')->name('police.create');
    Route::post('/police/store','policeController@store')->name('police.store');
    Route::get('/police/edit/{id}','policeController@edit')->name('police.edit');
    Route::post('/police/update/','policeController@update')->name('police.update');
    Route::post('/police/delete/{id}','policeController@destroy')->name('police.delete');

    Route::get('/blood-donor','BloodDonorController@index')->name('blood_donor');
    Route::get('/blood-donor/add','BloodDonorController@create')->name('blood_donor.create');
    Route::post('/blood-donor/store','BloodDonorController@store')->name('blood_donor.store');
    Route::get('/blood-donor/edit/{id}','BloodDonorController@edit')->name('blood_donor.edit');
    Route::post('/blood-donor/update/','BloodDonorController@update')->name('blood_donor.update');
    Route::post('/blood-donor/delete/{id}','BloodDonorController@destroy')->name('blood_donor.delete');

    Route::get('/banner','BannerController@index')->name('banner');
    Route::get('/banner/add','BannerController@create')->name('banner.create');
    Route::post('/banner/store','BannerController@store')->name('banner.store');
    Route::get('/banner/edit/{id}','BannerController@edit')->name('banner.edit');
    Route::post('/banner/update/','BannerController@update')->name('banner.update');
    Route::post('/banner/delete/{id}','BannerController@destroy')->name('banner.delete');


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