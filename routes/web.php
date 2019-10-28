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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/', 'OrderController@index');
Route::get('/gunlukSiparis', 'DailyOrdersController@index')->name('orders.daily');


Route::resources(['orders'=>'OrderController']);
Route::resources(['admin/shipping_companies'=>'ShippingCompanyController']);
Route::resources(['commercials'=>'CommercialController']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
