<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'EmployeeController@index') -> name('emp-index');

Route::get('/emp/create', 'EmployeeController@create') -> name('emp-create');
Route::post('/emp/create', 'EmployeeController@store') -> name('emp-store');

Route::get('/api/employee', 'EmployeeApiController@all') -> name('emp-api-index');
