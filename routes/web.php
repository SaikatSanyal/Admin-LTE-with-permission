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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/roles/get_datatable', 'RoleController@get_datatable');


Route::get('/roles', 'RoleController@index')->name('roles.index');
Route::get('/roles/create', 'RoleController@create')->name('roles.create');
Route::post('/roles/store', 'RoleController@store')->name('roles.store');
Route::get('/roles/edit', 'RoleController@edit')->name('roles.edit');
