<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'EmployeeController@index') -> name('emp-index');
Route::get('/api/employee', 'EmployeeApiController@all') -> name('emp-api-index');
