@extends('layouts.main-layout')
@section('content')
  <main>
    <div>
      <form method="POST" action="{{ route('update', $employee -> id) }}">
        @csrf
        @method('POST')

        <ul class="edit">

          <li>
            <h2>Firstname</h2>
            <div>
              <input type="text" name="firstname" placeholder="firstnamee" value="{{ $employee -> firstname }}">
            </div>
          </li>

          <li>
            <h2>Lastname</h2>
            <div>
              <input type="text" name="lastname" placeholder="lastname" value="{{ $employee -> lastname }}">
            </div>
          </li>

          <li>
            <h2>Role</h2>
            <div>
              <input type="number" name="role" placeholder="role" value="{{ $employee -> role }}">
            </div>
          </li>

          <li>
            <h2>Ral</h2>
            <div>
              <input type="number" name="ral" placeholder="ral" value="{{ $employee -> ral }}">
            </div>
          </li>
        </ul>

        <div class="button-center">
          <button type="submit" class="home">Update Employee</button>
          <a class="home" href="{{route('home')}}">List Employees</a>
        </div>

      </form>
    </div>
  </main>
@endsection
