<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'EmployeeController@index') -> name('emp-index');
