@extends('layout')
@section('content')

<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Equips de la Liga de Futbol </title>
 </head>

 <div class="row">
    <div class="col-md-3 m-4">
        <a href="{{ route('equips.create') }}" class="btn btn-lg btn-primary">Nuevo equipo</a>
    </div>
</div>

<table class="table table-responsive table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del Equipo</th>
      <th scope="col">Categoria</th>
      <th scope="col">Entrenador</th>
      <th scope="col">Teléfono</th>
    </tr>
  </thead>
  <tbody>
    @foreach($equips as $equipo)
    <tr>
      <th scope="row">{{ $equipo->id }}</th>
      <td>{{ $equipo->Nombre_Equipo}}</td>
      <td>{{ $equipo->Categoria}}</td>
      <td>{{ $equipo->entrenador}}</td>
      <td>{{ $equipo->phone_number}}</td>
      <td>
      <div class="btn-group">
        <a href="{{ route('equips.edit', $equipo->id)}}" class="btn btn-warning">Editar</a>
    
        <form method="POST" action="{{ route('equips.destroy', $equipo->id)}}">
          @csrf
          @method('DELETE')
          <button type="submit" href="#" class="btn btn-danger">Borrar</button>
        </form>
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-3 m-4">
    <a href="{{ url('/') }}" class="btn btn-lg btn-secondary">Volver a home</a>
    </div>
</div>
</div>
</html>

@endsection