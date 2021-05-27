@extends('layouts.main-layout')
@section('content')


  <main>
    {{-- Tabella fake di Employees --}}
    <ul>

      {{-- Numero di Employee --}}
      <li>
        <h2>Number</h2>
        @for ($i = 1; $i <= 50; $i++)
          <div>
            {{ $i }}
          </div>
        @endfor
      </li>

      {{-- Tutti Nomi --}}
      <li>
        <h2>Firstname</h2>
        @foreach ($employees as $employee)
          <div>
            {{ $employee -> firstname }}
          </div>
        @endforeach
      </li>

      {{-- Tutti Cognomi --}}
      <li>
        <h2>Lastname</h2>
        @foreach ($employees as $employee)
          <div>
            {{ $employee -> lastname }}
          </div>
        @endforeach
      </li>

      {{-- Clicare per sapere di piu sul Employee --}}
      <li>
        <h2>Information</h2>
        @foreach ($employees as $employee)
          <div>
            <a href="{{route('employee', $employee -> id)}}">
              <i class="fas fa-info-circle"></i>
            </a>
          </div>
        @endforeach
      </li>

      {{-- Clicare per Modificare un Employee --}}
      <li>
        <h2>Edit</h2>
        @foreach ($employees as $employee)
          <div>
            <a href="{{route('edit', $employee -> id)}}">
              <i class="edit fas fa-user-edit"></i>
            </a>
          </div>
        @endforeach
      </li>

      {{-- Clicare per Eliminare un Employee --}}
      <li>
        <h2>Delete</h2>
        @foreach ($employees as $employee)
          <div>
            <a href="{{route('destroy', $employee -> id)}}">
              <i class="delete fas fa-user-slash"></i>
            </a>
          </div>
        @endforeach
      </li>
    </ul>
  </main>
@endsection
