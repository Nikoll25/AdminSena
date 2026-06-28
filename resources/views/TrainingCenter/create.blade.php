
@extends('layouts.app')

@section('content')
<div class="card shadow-sm p-4">
    <h1>Registrar Centro de Formacion</h1>
<form action="{{route('TrainingCenter.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-md-15">
<label class="form_label">
    nombre:
    <br>
    <input class="form_control" type="text" name="name">
</label>
</div>
<br><br>
<label>
    ubicación:
    <br>
    <input type="text" name="location">
</label>
<br><br>
<button class="btn btn-success" type="submit">Enviar Formulario:</button>
</form>
</div>
@endsection