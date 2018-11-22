<?php

Route::view('/', "enunciado");

Route::get('/clientes', 'ClientesController@index');
Route::get('/hotels', 'HotelsController@hotels1');
Route::view('/createcliente', "cliente.create");
Route::get('/createclientedb', 'ClientesController@create');
Route::get('/reserva/{id}', 'ReservasController@mostrar($id)');

