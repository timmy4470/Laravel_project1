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



Route::get('report', 'ReportController@report')->name('report');

Auth::routes();

Route::view('/group_reg', 'group_registration')->name('group_reg');
Route::post('/group_reg', 'GroupController@storeGroup')->name('group_reg');

Route::get('/groups', 'GroupController@index')->name('groups');
Route::get('/group_assign', 'GroupController@index')->name('group_assign');
Route::get('/home', 'HomeController@index')->name('home');



Route::post('/group_assign', 'GroupController@assignGroup');
