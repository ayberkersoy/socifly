<?php

Route::get('/', 'SettingController@index');

Route::get('groups', 'GroupController@index');
Route::get('groups/{group}', 'GroupController@show');