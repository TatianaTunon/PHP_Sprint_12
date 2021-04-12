@extends('layout')

@section('content')
<div class="container">
<form method="POST" action="{{ route('equips.update', $equips->id) }}">
@csrf <!--token-->
@method('PUT') 
<h3 class="p-3 mb-2 col-md-6 bg-warning text-white">Edicción Equipos</h3>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNombre_Equipo">Nombre del Equipo</label>
      <input name=Nombre_Equipo type="text" class="form-control" id="Nombre_Equipo" placeholder="Nombre del equipo" value="{{ old('Nombre_Equipo', $equips->Nombre_Equipo) }}">
    @error('Nombre_Equipo')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputcategoria">Categoria</label>
      <input name=categoria type="text" class="form-control" id="inputcategoria" placeholder="Categoria" value="{{ old('Categoria', $equips->Categoria) }}">
    @error('categoria')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEntrenador">Entrenador</label>
      <input name=entrenador type="text" class="form-control" id="inputEntrenador" placeholder="Entrenador" value="{{ old('entrenador', $equips->entrenador) }}">
    @error('entrenador')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div></br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputphone_number">Teléfono</label>
      <input name=phone_number type="text" class="form-control" id="inputphone_number" placeholder="Teléfono" value="{{ old('phone_number', $equips->phone_number) }}">
    </div>
    @error('phone_number')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
</br>
  <button type="submit" class="btn btn-warning">Editar</button>
</form>
</div>

@endsection