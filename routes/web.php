<?php



Route::get('/home','IndexController@index');
Route::get('/create','IndexController@create');
Route::post('/store','IndexController@store');
Route::get('/edit/{id}','IndexController@edit');
Route::get('/delete/{id}','IndexController@destroy');
Route::post('/update/{id}','IndexController@update');


