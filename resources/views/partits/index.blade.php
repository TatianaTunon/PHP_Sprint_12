@extends('layout')
@section('content')

<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Partits de la Liga de Futbol </title>
 </head>

 <div class="row">
    <div class="col-md-3 m-4">
        <a href="{{ route('partits.create') }}"  class="btn btn-lg btn-primary">Partido</a>
    </div>
</div>

<table class="table table-responsive table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Equipo1</th>
      <th scope="col">Equipo2</th>
      <th scope="col">Fecha</th>
      <th scope="col">Resultado</th>
    </tr>
  </thead>
  <tbody>
    @foreach($partits as $partit)
    <tr>
      <th scope="row">{{ $partit->id}}</th>
      <td>{{ $partit->equip1_id}}</td>
      <td>{{ $partit->equip2_id}}</td>
      <td>{{ $partit->date}}</td>
      <td>{{ $partit->resultado}}</td>
      <td>
      <div class="btn-group">
      <a href="{{ route('partits.edit', $partit->id)}}"  class="btn btn-warning">Editar</a>
    
        <form method="POST" action="{{ route('partits.destroy', $partit->id)}}">
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