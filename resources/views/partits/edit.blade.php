@extends('layout')

@section('content')
<div class="container">
<form method="POST" action="{{ route('partits.update', $partits->id) }}">
@csrf <!--token-->
@method('PUT') 
<h3 class="p-3 mb-2 col-md-6 bg-warning text-white">Edicción Partidos</h3>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputequip1_id">Equipo1</label>
      <input name=equip1_id type="text" class="form-control" id="equip1_id" placeholder="equip1_id" value="{{ old('equip1_id', $partits->equip1_id) }}">
    @error('equip1_id')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputequip2_id">Equipo2</label>
      <input name=equip2_id type="text" class="form-control" id="equip2_id" placeholder="equip2_id" value="{{ old('equip2_id', $partits->equip2_id) }}">
    @error('equip2_id')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputdate">Fecha</label>
      <input name=date type="date" class="form-control" id="inputdate" placeholder="date" value="{{ old('date', $partits->date) }}">
    @error('date')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputresultado">Resultado</label>
      <input name=resultado type="text" class="form-control" id="inputresultado" placeholder="resultado" value="{{ old('resultado', $partits->resultado) }}">
    @error('resultado')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
</br>
  <button type="submit" class="btn btn-warning">Editar</button>
</form>
</div>

@endsection