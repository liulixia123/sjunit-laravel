<?php
Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('junit.store');

// 测试路由
Route::get('test', 'TestController@index');