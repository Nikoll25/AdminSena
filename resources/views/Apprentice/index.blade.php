@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-4">Lista de Aprendices</h1>
            <a href="/apprentice/create" class="btn btn-success rounded-pill px-3 py-2 shadow-sm">
                <i class="bi bi-plus-circle"></i>
                Agregar Aprendiz
            </a>
        </div>
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
                        <td>{{ $apprentice->computer->brand }}</td>

                        <td class="text-nowrap text-center">
                            <a href="{{ route('apprentice.show', $apprentice->id) }}" class="btn btn-outline-success ">
                                <i class="bi bi-eye"></i>
                            </a>

                            <a href="{{ route('apprentice.edit', $apprentice->id) }}" class="btn btn-outline-info ">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('apprentice.destroy', $apprentice->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('delete')

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
