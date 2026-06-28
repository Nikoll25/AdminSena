
@extends('layouts.app')

@section('content')
<div class="card shadow-sm p-4">
    <h1>Registrar Aprendiz</h1>
<form action="{{route('Apprentice.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-md-15">
<label class="form_label">
    Nombre:
    <br>
    <input class="form-control" type="text" name="name">
</label>
</div>
<br><br>
<div class="col-md-15">
<label class="form_label">
    email:
    <br>
    <input class="form-control" type="text" name="email">
</label>
</div>
<br><br>
<div class="col-md-15">
<label class="form_label">
    Número de teléfono:
    <br>
    <input class="form-control" type="text" name="cell_number">
</label >
</div>
<br><br>
 <label class="form_label" for="course_id">Curso</label>
<select class="form-select" aria-label="Default select example" name="course_id" id="course_id">
    <option value="">Seleccione un curso</option>

    @foreach($courses as $course)
        <option value="{{ $course->id }}">
            {{ $course->number }}
        </option>
    @endforeach
</select>
<br><br>
 <label class="form_label" for="computer_id">Computador</label>
<select class="form-select" aria-label="Default select example" name="computer_id" id="computer_id">
    <option value="">Seleccione un computador</option>

    @foreach($computers as $computer)
        <option value="{{ $computer->id }}">
            {{ $computer->number}}
        </option>
    @endforeach
</select>
<br><br>
<button class="btn btn-success" type="submit">Enviar Formulario:</button>
</form>
</div>
@endsection