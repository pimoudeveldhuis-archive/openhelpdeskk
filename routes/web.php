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

Route::get('/', 'DashboardController@render')->name('dashboard');

Route::get('login', 'AccountController@render_login')->name('login');
Route::post('login', 'AccountController@do_login')->name('do-login');

Route::get('twofactor', 'AccountController@render_twofactor')->name('twofactor');
Route::post('twofactor', 'AccountController@do_twofactor')->name('do-twofactor');

Route::get('tickets', 'TicketController@index')->name('tickets');