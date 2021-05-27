<?php

use Illuminate\Support\Facades\Route;

// Pagina home
Route::get('/', 'GeneralController@home') -> name('home');

// Descrizione di oggetto clicato
Route::get('/employee/{id}', 'GeneralController@employee') -> name('employee');

// Creazione di nuovo oggetto
Route::get('/create/employee', 'GeneralController@create') -> name('create');
Route::post('/store/employee', 'GeneralController@store') -> name('store');

// Modificazione di un oggetto
Route::get('/edit/employee/{id}', 'GeneralController@edit') -> name('edit');
Route::post('/update/employee/{id}', 'GeneralController@update') -> name('update');

// Eliminazione di un oggetto
Route::get('/destroy/{id}', 'GeneralController@destroy') -> name('destroy');
