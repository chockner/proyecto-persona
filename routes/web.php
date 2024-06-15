<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio')->name('inicio');
/* Route::view('personas', 'personas')->name('personas'); */
route::get('personas', 'App\Http\Controllers\PersonasController@index')->name('personas.index');
route::get('personas/{nPerCodigo?}', 'App\Http\Controllers\PersonasController@show')->name('personas.show');
route::get('personas/registrar}', 'App\Http\Controllers\PersonasController@create')->name('personas.create');

route::post('personas}', 'App\Http\Controllers\PersonasController@store')->name('personas.store');

Route::view('contacto', 'contacto')->name('contacto');