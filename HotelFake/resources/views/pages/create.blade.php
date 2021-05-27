@extends('layouts.main-layout')
@section('content')
  <main>
    <div>
      <form method="POST" action="{{ route('store') }}">
        @csrf
        @method('POST')

        <ul>
          <li><h1>Create Employee:</h1></li>
          <li><input type="text" name="firstname" placeholder="firstnamee"></li>
          <li><input type="text" name="lastname" placeholder="lastname"></li>
          <li><input type="number" name="role" placeholder="role"></li>
          <li><input type="number" name="ral" placeholder="ral"></li>
        </ul>
        <button type="submit" class="home">Ad Employee</button>
      </form>
    </div>
  </main>
@endsection
