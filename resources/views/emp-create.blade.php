@extends('layouts.app')
@section('content')

  <div class="main-content">
    <form action={{ route('emp-store')}} method="post">
      @csrf
      @method('POST')
      <div>
        <label for="firstname">Firstname:</label><br>
        <input class="@error('firstname') is-invalid @enderror" type="text" name="firstname" value="{{old('firstname')}}">
        @error('firstname')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div>
        <label for="lastname">Lastname:</label><br>
        <input class="@error('lastname') is-invalid @enderror" type="text" name="lastname" value="{{old('lastname')}}">
        @error('lastname')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <br><br>
      <button type="submit" name="button">Send</button>
    </form>

  </div>
@endsection
