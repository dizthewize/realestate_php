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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/properties', 'PagesController@properties');
Route::get('/contact', 'PagesController@contact');

Auth::routes();

Route::prefix('admin')->middleware('role:superadministrator|administrator')->group(function () {
  Route::get('/', 'AdminController@index');

  Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');

  Route::resource('items', 'ItemsController');
});

Route::get('/dashboard', 'DashboardController@index');
