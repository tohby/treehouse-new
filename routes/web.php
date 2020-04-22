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
Route::get('/contact', 'HomeController@contact');
Route::post('/contact/send', 'ContactMessageController@send');
Route::get('/store', 'HomeController@portfolio');
Route::get('/events', 'HomeController@events');
Route::get('/product/{id}', 'HomeController@portfolio_show');
Route::get('/product/{id}/order', 'HomeController@order');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('/users', 'UsersController')->except(['show']);
    // Route::resource('carousel', 'CarouselController')->except(['show', 'edit']);
    Route::resource('portfolio', 'PortfolioController');
    Route::resource('events', 'EventController');
    Route::get('change-password', 'ChangePasswordController@get');
    Route::post('change-password', 'ChangePasswordController@change');
    // Route::resource('/events', 'EventController');
    Route::get('messages', 'MessagesController@index');
});
