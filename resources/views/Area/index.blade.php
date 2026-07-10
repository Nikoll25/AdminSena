@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="m-0">Lista de áreas</h1>
        <a class="btn btn-secondary" href="/area/create">
            Ingresar Área
        </a>
    </div>

    <table id="idArea" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($areas as $area)
                <tr>
                    <td>{{ $area->id }}</td>
                    <td>{{ $area->name }}</td>
                    <td>
                        <a href="{{ route('area.show', $area->id) }}" class="btn btn-primary btn-sm">
                            Mostrar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
