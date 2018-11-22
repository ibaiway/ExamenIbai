@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Hoteles de 1ª</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Categoria</th>
    </tr>
    @foreach($hotels as $hotel)
    @if($hotel->completo == true)
    <tr style="color:red">
    @else
    <tr>
    @endif
      <li>{{ $hotel->id}}</li>
      <li>{{ $hotel->nombre}}</li>
      <li>{{ $hotel->direccion}}</li>
      <li>{{ $hotel->categoria}}</li>
    </tr>
    @endforeach

  </table>

@endsection
