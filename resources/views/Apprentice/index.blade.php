@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Lista de Aprendices</h1>

    <table id="idApprentices" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>correo</th>
                <th>Número de teléfono</th>
                <th>Curso</th>
                <th>Computador</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($apprentices as $apprentice)
                <tr>
                    <td>{{ $apprentice->id }}</td>
                    <td>{{ $apprentice->name }}</td>
                    <td>{{ $apprentice->email }}</td>
                    <td>{{ $apprentice->cell_number }}</td>
                    <td>{{ $apprentice->course->number }}</td>
                    <td>{{ $apprentice->computer->brand}}</td>

                    <td>
                        <a href="{{ route('apprentice.show', $apprentice->id) }}" class="btn btn-primary btn-sm">
                            Mostrar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-secondary" href="/apprentice/create">
        Ingresar Apprendiz
    </a>
</div>
@endsection
