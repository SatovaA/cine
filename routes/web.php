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

Route::get('/', 'ActorsController@list')->name('get_list_actors');
Route::get('/create-actor', 'ActorsController@create')->name('get_create_actors');
Route::post('/store-actor', 'ActorsController@store')->name('post_store_actor');
Route::get('/edit-actor/{idActor}', 'ActorsController@edit')->name('get_edit_actor');
Route::put('/update-actor', 'ActorsController@update')->name('put_update_actor');
Route::get('/delete-actor/{idActor}', 'ActorsController@delete')->name('delete_actor');


Route::get('/movies', 'MoviesController@list')->name('get_list_movies');
Route::get('/create-movie', 'MoviesController@create')->name('get_create_movies');
Route::post('/store-movie', 'MoviesController@store')->name('post_store_movie');
Route::get('/edit-movie/{idActor}', 'MoviesController@edit')->name('get_edit_movie');
Route::put('/update-movie', 'MoviesController@update')->name('put_update_movie');
Route::get('/delete-movie/{idActor}', 'MoviesController@delete')->name('delete_movie');

