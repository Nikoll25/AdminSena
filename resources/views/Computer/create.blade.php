
@extends('layouts.app')

@section('content')
<div class="card shadow-sm p-4">
    <h1>Registrar Computador</h1>
<form action="{{route('Computer.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<label>
    Numero:
    <br>
    <input type="text" name="number">
</label>
<br><br>
<label>
    Marca:
    <br>
    <input type="text" name="brand">
</label>
<br><br>
<button class="btn btn-success" type="submit">Enviar Formulario:</button>
</form>
</div>
@endsection