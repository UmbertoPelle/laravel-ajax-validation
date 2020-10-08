<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;


class EmployeeApiController extends Controller{
  public function all(){
    $emps = Employee::all();

    return response() -> json($emps);
  }
}
