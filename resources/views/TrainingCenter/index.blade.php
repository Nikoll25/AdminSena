@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Lista de Centros de formación</h1>

    <table id="idTrainingCenter" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Ubicación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trainingcenters as $trainingcenter)
                <tr>
                    <td>{{ $trainingcenter->id }}</td>
                    <td>{{ $trainingcenter->name }}</td>
                    <td>{{ $trainingcenter->location }}</td>

                    <td>
                        <a href="{{ route('trainingcenter.show', $trainingcenter->id) }}" class="btn btn-primary btn-sm">
                            Mostrar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-secondary" href="/trainingcenter/create">
        Ingresar Centro de formación
    </a>
</div>
@endsection
