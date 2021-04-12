@extends('layout')

@section('content')
<div class="container">
<form method="POST" action="{{ route('equips.store') }}">
@csrf <!--token-->
<h3 class="p-3 mb-2 col-md-6 bg-primary text-white">Nuevo Equipo</h3>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNombre_Equipo">Nombre del Equipo</label>
      <input name=Nombre_Equipo type="text" class="form-control" id="Nombre_Equipo" placeholder="Nombre del equipo" value="{{ old('Nombre_Equipo') }}">
    @error('Nombre_Equipo')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputcategoria">Categoria</label>
      <input name=Categoria type="text" class="form-control" id="inputCategoria" placeholder="Categoria" value="{{ old('Categoria') }}">
    @error('Categoria')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputentrenador">Entrenador</label>
      <input name=entrenador type="text" class="form-control" id="inputentrenador" placeholder="Entrenador" value="{{ old('entrenador') }}">
    @error('entrenador')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div></br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputphone_number">Teléfono</label>
      <input name=phone_number type="text" class="form-control" id="inputphone_number" placeholder="Teléfono" value="{{ old('phone_number') }}">
    @error('phone_number')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  </br>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>

@endsection