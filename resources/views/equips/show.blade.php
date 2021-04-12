@extends('layout')
@section('content')

<!DOCTYPE html>

<div class="container">
    <div class="col-md-3 m-4">
        <h1>id: <?php echo ($equips->id); ?></h1>
        <p>Equipo: <?php echo ($equips->Nombre_Equipo); ?></p>
        <p>Categoria: <?php echo ($equips->Categoria); ?></p>
        <p>Entrenador/a: <?php echo ($equips->entrenador); ?></p>
        <p>Teléfono: <?php echo ($equips->phone_number); ?></p>

    <div class="row justify-content-center">    
        <a href="{{ route('equips.index') }}" class="btn btn-lg btn-secondary">Volver al index</a>
    </div>
    </div>
</div>
</html>