<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/', 'HomeController@index');

Route::resource('/ticket','TicketController');
Route::resource('/agent','UserController');

Route::post('/ticket/updateStatus','TicketController@updateStatus');

Route::get('/tickets/reports',['as'=>'ticket.reports','uses'=>'TicketController@ticketsReports']);