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

Route::get('/', 'HomeController@welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ticket/{id}', 'HomeController@ticket')->name('ticket');

Route::post('/buy-ticket', 'HomeController@store')->name('buy-ticket');

Route::resource('/train', 'TrainController');

Route::resource('/station', 'StasionController');

Route::resource('/train_schedule', 'ScheduleTrainController');

Route::resource('/booking', 'BookingController');

Route::resource('/customer', 'CustomerController');

<<<<<<< HEAD
Route::get('export', 'ExcelController@Export');

Route::get('downloadExcel/{type}', 'ExcelController@downloadExcel');
=======
Route::resource('/customer_ticket', 'CustomerTicket');
>>>>>>> 4fa2b00fbe14868c25a30b42820636652124f9b7
