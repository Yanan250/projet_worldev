<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Route::get('/', function () {
    return view('welcome');
});

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'VoyageController@create')->name('create');
Route::post('/', 'VoyageController@store')->name('store');


Route::get('trajet', 'TrajetController@index');
Route::get('search', 'TrajetController@search')->name('trajet.search');


Route::get('/about', 'VoyageController@about')->name('about');
Route::get('/contact', 'VoyageController@contact')->name('contact');
Route::get('/gallery', 'VoyageController@gallery')->name('gallery');

Route::get('/service', 'VoyageController@service')->name('service');
