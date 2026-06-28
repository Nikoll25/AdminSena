
@extends('layouts.app')

@section('content')
<div class="card shadow-sm p-4">
<h1>Registrar Curso</h1>
<form action="{{route('Course.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<label>
    Numero de ficha:
    <br>
    <input type="text" name="number">
</label>
<br><br>
<label>
    Día:
    <br>
    <input type="text" name="day">
</label>
<br>
<br>
 <label for="area_id">Area</label>
    <select name="area_id" id="area_id" class="form-control">
        <option value="">Seleccione una Area</option>

        @foreach($areas as $area)
            <option value="{{ $area->id }}">
                {{ $area->name }}
            </option>
        @endforeach
    </select>
<br>
<br><br>
 <label for="training_center_id">Centro de formación</label>

<select name="training_center_id" id="training_center_id">
    <option value="">Seleccione un centro de formación</option>
    @foreach($trainingCenters as $trainingCenter)
        <option value="{{ $trainingCenter->id }}">
            {{ $trainingCenter->name }}
        </option>
    @endforeach
</select>
<br><br>
<button class="btn btn-success" type="submit">Enviar Formulario:</button>
</form>
</div>
@endsection
