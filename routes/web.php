<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/daftar/ojek', function () {
    return view('daftar_ojek');
});

Route::get('/daftar/merchant', function () {
    return view('daftar_merchant');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('daftar/merchant', ['as'=>'daftar_merchant', 'uses'=>'HomeController@daftar_merchant']);
Route::post('daftar/ojek', ['as'=>'daftar_ojek', 'uses'=>'HomeController@daftar_ojek']);


Route::get('dashboard', ['as'=>'dashboard', 'uses'=> 'DashboardController@dashboard']);

Route::get('dashboard/driver/ojek/active', ['as'=>'driver_ojek_active', 'uses'=> 'DashboardController@driver_ojek_active']);
Route::get('dashboard/driver/ojek/pending', ['as'=>'driver_ojek_pending', 'uses'=> 'DashboardController@driver_ojek_pending']);
Route::get('dashboard/driver/ojek/blokir', ['as'=>'driver_ojek_blokir', 'uses'=> 'DashboardController@driver_ojek_blokir']);
Route::get('dashboard/driver/ojek/detail/{id}', ['as'=>'driver_ojek_detail', 'uses'=> 'DashboardController@driver_ojek_detail']);


Route::get('dashboard/driver/taxi/active', ['as'=>'driver_taxi_active', 'uses'=> 'DashboardController@driver_taxi_active']);
Route::get('dashboard/driver/taxi/pending', ['as'=>'driver_taxi_pending', 'uses'=> 'DashboardController@driver_taxi_pending']);
Route::get('dashboard/driver/taxi/blokir', ['as'=>'driver_taxi_blokir', 'uses'=> 'DashboardController@driver_taxi_blokir']);
Route::get('dashboard/driver/taxi/detail/{id}', ['as'=>'driver_taxi_detail', 'uses'=> 'DashboardController@driver_taxi_detail']);
Route::patch('dashboard/driver/aksi/{id}', ['as'=>'driver_aksi', 'uses'=> 'DashboardController@driver_aksi']);
Route::delete('dashboard/driver/delete/{id}', ['as'=>'driver_delete', 'uses'=> 'DashboardController@driver_delete']);


Route::get('dashboard/merchant/pending', ['as'=>'merchant_pending', 'uses'=> 'DashboardController@merchant_pending']);
Route::get('dashboard/merchant/aktif', ['as'=>'merchant_aktif', 'uses'=> 'DashboardController@merchant_aktif']);
Route::get('dashboard/merchant/non-aktif', ['as'=>'merchant_non_aktif', 'uses'=> 'DashboardController@merchant_non_aktif']);
Route::get('dashboard/merchant/detail/{id}', ['as'=>'merchant_detail', 'uses'=> 'DashboardController@merchant_detail']);
Route::patch('dashboard/merchant/aksi/{id}', ['as'=>'merchant_aksi', 'uses'=> 'DashboardController@merchant_aksi']);
Route::delete('dashboard/merchant/delete/{id}', ['as'=>'merchant_delete', 'uses'=> 'DashboardController@merchant_delete']);
