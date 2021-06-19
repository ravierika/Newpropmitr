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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');



Auth::routes();


Route::get('/properties/list', 'PropertyController@indexlist')->name('properties.indexlist');


Route::resource('/properties', 'PropertyController');

Route::resource('/leads', 'LeadController');

Route::resource('/customers', 'CustomerController');


Route::get('/{page}', 'AdminController@index');



Route::group(['middleware'=>'admin'], function(){

    Route::resource('admin/users', 'AdminUsersController');
    Route::delete('admin/users/{user}/destroy', 'AdminUsersController@destroy')->name('users.destroy');
    Route::get('admin/users/{user}/profile', 'AdminUsersController@show')->name('users.show');
    Route::post('save_image', 'AdminUsersController@save_image')->name('save.profile.picture');

});

Route::get('/home', 'HomeController@index')->name('home');

