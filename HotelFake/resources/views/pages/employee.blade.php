@extends('layouts.main-layout')
@section('content')
  <main>
    <div>
      <ul class="employee">

        <li>
          <h2>ID</h2>
          <div>
            {{ $employee -> id }}
          </div>
        </li>

        <li>
          <h2>Firstname</h2>
          <div>
            {{ $employee -> firstname }}
          </div>
        </li>

        <li>
          <h2>Lastname</h2>
          <div>
            {{ $employee -> lastname }}
          </div>
        </li>

        <li>
          <h2>Role</h2>
          <div>
            {{ $employee -> role }}
          </div>
        </li>

        <li>
          <h2>Ral</h2>
          <div>
            {{ $employee -> ral }}
          </div>
        </li>

      </ul>
    </div>

    <div class="button-center">
      <a class="home" href="{{route('home')}}">List Employees</a>
    </div>

  </main>
@endsection
