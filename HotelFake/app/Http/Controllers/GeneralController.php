<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class GeneralController extends Controller
{
  public function home() {

    $employees = Employee::all();

    return view('pages.home', compact('employees'));
  }

  public function employee($id) {
    $employee = Employee::findorFail($id);

    return view('pages.employee', compact('employee'));
  }

  public function create() {

    return view ('pages.create');
  }

  public function store(Request $request) {


    $validate = $request -> validate ([
      'firstname' => 'required|max:128',
      'lastname' => 'required|max:128',
      'role' => 'required|numeric',
      'ral' => 'nullable|numeric',
    ]);

    $employee = Employee::create($validate);
    return redirect() -> route('employee', $employee -> id);
  }

  public function edit($id) {

    $employee = Employee::findorFail($id);

    return view ('pages.edit', compact('employee'));
  }

  public function update(Request $request, $id) {

    $validate = $request -> validate ([
      'firstname' => 'required|max:128',
      'lastname' => 'required|max:128',
      'role' => 'required|numeric',
      'ral' => 'nullable|numeric',
    ]);

    $employee = Employee::findorFail($id);

    $employee -> update($validate);

    return redirect() -> route('employee', $employee -> id);
  }

  public function destroy($id) {

    $employee = Employee::findorFail($id);

    $employee -> delete();

    return redirect() -> route('home');
  }
}
