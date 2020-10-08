@extends('layouts.app')
@section('content')

  <div class="main-content">
    <form action={{ route('emp-store')}} method="post">
      @csrf
      @method('POST')
      <div>
        <label for="firstname">Firstname:</label><br>
        <input type="text" name="firstname">
      </div>
      <div>
        <label for="lastname">Lastname:</label><br>
        <input type="text" name="lastname">
      </div>
      <br><br>
      <button type="submit" name="button">Send</button>
    </form>

  </div>
@endsection
