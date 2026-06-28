
@extends('layouts.app')

@section('content')
<div class="card shadow-sm p-4">
    <h1>Registrar Profesor</h1>
<form action="{{route('Teacher.store')}}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="col-md-15">
        <label class="form-label">Nombre:</label>
        <input type="text" class="form-control">
    </div>

    <div class="col-md-14">
        <label class="form-label">Email:</label>
        <input type="email" class="form-control">
    </div>
 <div class="mb-3">
 <label class="form-label" for="area_id">Area</label>
    <select class="form-select" aria-label="Default select example" name="area_id" id="area_id">
        <option value="">Seleccione una Area</option>
        @foreach($areas as $area)
            <option value="{{ $area->id }}">
                {{ $area->name }}
            </option>
        @endforeach
    </select>
    </div>
 <div class="mb-3">
 <label for="training_center_id">Centro de formación</label>
<select class="form-select" aria-label="Default select example" name="training_center_id" id="training_center_id">
    <option value="">Seleccione un centro de formación</option>
    @foreach($trainingCenters as $trainingCenter)
        <option value="{{ $trainingCenter->id }}">
            {{ $trainingCenter->name }}
        </option>
    @endforeach
</select>
</div>
 <div class="mb-3">
<button type="submit" class="btn btn-success">Enviar Formulario</button>
</div>
</form>
</div>
@endsection