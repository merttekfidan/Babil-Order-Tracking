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

Route::prefix('admin')->name('admin.')->middleware('can:isAdmin,App\User', 'auth')->group(function () {
    Route::resources(['/shipping_companies'=>'Admin\ShippingCompanyController']);
    Route::post('/user/active/{user}', 'Admin\UserController@active')->name('user.active');
    Route::resources(['/user'=>'Admin\UserController']);
});

Route::get('user/{user}', ['as' => 'user.edit', 'uses' => 'User\UserController@edit'])->middleware('can:update,user', 'auth');
Route::put('user/{user}/update', ['as' => 'user.update', 'uses' => 'User\UserController@update'])->middleware('can:update,user', 'auth');
