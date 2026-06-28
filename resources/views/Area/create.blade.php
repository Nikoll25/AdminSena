
@extends('layouts.app')

@section('content')
<div class="card shadow-sm p-4">
    <h1>Formulario de Areas</h1>
<form action="{{route('Area.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-md-10">
<label class="form-label"></label>
    Nombre:
    <br>
    <input class="form-control" type="text" name="name">
</div>
<br>
<button class="btn btn-success" type="submit">Enviar Formulario:</button>
</form>
</div>
@endsection