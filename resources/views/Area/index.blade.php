@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="m-0">Lista de áreas</h1>
            <a href="/area/create" class="btn btn-success rounded-pill px-3 py-2 shadow-sm">
                <i class="bi bi-plus-circle"></i>
                Agregar Área
            </a>
        </div>

        <table id="idArea" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th class="text-nowrap text-center">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area->id }}</td>
                        <td>{{ $area->name }}</td>

                        <td class="text-nowrap text-center">
                            <a href="{{ route('area.show', $area->id) }}" class="btn btn-outline-success ">
                                <i class="bi bi-eye"></i>
                            </a>

                            <a href="{{ route('area.edit', $area->id) }}" class="btn btn-outline-info ">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('area.destroy', $area->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-outline-danger"
                                    title="Eliminar">
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
