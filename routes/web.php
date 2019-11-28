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

Route::get('/about',function() {
    return view('about');
});

Route::resource('/dashboard','DashboardController');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/complaint','ComplaintController');

Route::resource('/schedule','ScheduleController');

Route::resource('/profile','ProfileController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::get('/printpdf/{id}','PDFController@download')->name('printpdf.download');



