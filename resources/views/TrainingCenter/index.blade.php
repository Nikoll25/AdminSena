@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="m-0">Lista de Centros de Formación</h1>

            <a href="/trainingcenter/create" class="btn btn-success rounded-pill px-3 py-2 shadow-sm">
                <i class="bi bi-plus-circle"></i>
                Agregar Centro
            </a>
        </div>

        <table id="idTrainingCenter" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th class="text-nowrap text-center">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($trainingcenters as $trainingcenter)
                    <tr>
                        <td>{{ $trainingcenter->id }}</td>
                        <td>{{ $trainingcenter->name }}</td>
                        <td>{{ $trainingcenter->location }}</td>

                        <td class="text-nowrap text-center">

                            <!-- Ver -->
                            <a href="{{ route('trainingcenter.show', $trainingcenter->id) }}"
                                class="btn btn-outline-success" title="Ver">
                                <i class="bi bi-eye"></i>
                            </a>

                            <!-- Editar -->
                            <a href="{{ route('trainingcenter.edit', $trainingcenter->id) }}" class="btn btn-outline-info"
                                title="Editar">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <!-- Eliminar -->
                            <form action="{{ route('trainingcenter.destroy', $trainingcenter->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-outline-danger" title="Eliminar">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
