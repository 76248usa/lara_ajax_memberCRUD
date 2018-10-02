<?php

Route::get('/', 'HomeController@index');
Route::post('insertdata', 'HomeController@insertdata');
Route::post('updatedata', 'HomeController@updatedata');
Route::post('deletedata', 'HomeController@deletedata');
    