@extends('layouts.app')
@section('content')
  <div class="main-content">
    <h1>Employee</h1>
    <h3><a href={{ route('emp-create') }}>New Employee</a></h3>
    <ol id='target'>

    </ol>
  </div>

@endsection
