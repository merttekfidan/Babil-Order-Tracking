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

Route::get('/admin', function () {
    return 'you re an admin';
})->middleware('can:viewAny, App\ShippingCompany');

Route::prefix('admin')->name('admin.')->middleware('can:viewAny,App\ShippingCompany')->group(function () {
    Route::resources(['/shipping_companies'=>'ShippingCompanyController']);
});
