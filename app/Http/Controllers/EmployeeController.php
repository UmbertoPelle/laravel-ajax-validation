<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller{

  public function index(){
    return view('emp-index');
  }

  public function create(){
    return view('emp-create');
  }

  public function store(Request $request){
    $data = $request -> validate([
        'firstname' => 'required|min:3|max:10',
        'lastname' => 'required|min:3|max:10',
    ]);
    $emp = Employee::create($data);

    return redirect() -> route('emp-index');
  }
}
