@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Clientes</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>NIF</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Telefono</th>
    </tr>
    @foreach($clientes as $cliente)
    <tr>
      <li>{{ $cliente->id}}</li>
      <li>{{ $cliente->nif}}</li>
      <li>{{ $cliente->nombre}}</li>
      <li>{{ $cliente->apellido}}</li>
      <li>{{ $cliente->telefono}}</li>
    </tr>
    @endforeach


  </table>

@endsection
