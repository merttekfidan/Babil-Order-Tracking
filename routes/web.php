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

Route::resources(['orders'=>'OrderController']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gunlukSiparis', 'DailyOrdersController@index')->name('orders.daily');
