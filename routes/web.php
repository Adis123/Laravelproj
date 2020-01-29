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
Route::get('/post/{articles}', ['as'=>'postid', 'uses' => 'MyController@page']);
Route::get('/', 'MyController@main');
Route::resource('/newsletter', 'Newslettercontroller');
Route::resource('/search','SearchController');
Route::get('/category/{category}', ['as'=>'category', 'uses' => 'MyController@getCategory']);
Route::get('/testing', 'MyController@testingjson');