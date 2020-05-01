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

Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/about1', 'HomeController@about');
Route::get('/about2', 'HomeController@about');
Route::get('/about3', 'HomeController@about');
Route::get('/about4', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact/send', 'ContactMessageController@send');
Route::get('/store', 'HomeController@portfolio');
Route::get('/our-events', 'HomeController@events');
Route::get('/product/{id}', 'HomeController@portfolio_show');
Route::get('/product/{id}/order', 'HomeController@order');
Route::post('/product/order', 'MakeOrderController@order');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('/users', 'UsersController')->except(['show']);

    Route::resource('portfolio', 'PortfolioController');
    Route::resource('events', 'EventController');
    Route::get('orders', 'OrderController@index');
    Route::get('orders/{id}/details', 'OrderController@show');
    Route::get('orders/{id}/cancel', 'OrderController@cancel');
    Route::get('orders/{id}/change-status', 'OrderController@updateStatus');
    Route::get('change-password', 'ChangePasswordController@get');
    Route::post('change-password', 'ChangePasswordController@change');

    Route::get('messages', 'MessagesController@index');
    Route::get('messages/read', 'MessagesController@read');
    Route::get('messages/unread', 'MessagesController@unread');
    Route::get('message/{id}', 'MessagesController@show');
});