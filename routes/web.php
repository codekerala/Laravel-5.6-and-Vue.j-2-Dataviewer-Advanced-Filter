<?php

Route::get('api/customers', 'CustomerController@index');

Route::get('/', function () {
    return view('welcome');
});
