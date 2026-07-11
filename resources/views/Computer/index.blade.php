@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="m-0">Lista de Computadores</h1>
            <a href="/computer/create" class="btn btn-success rounded-pill px-3 py-2 shadow-sm">
                <i class="bi bi-plus-circle"></i>
                Agregar Computador
            </a>
        </div>

        <table id="idComputer" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Número</th>
                    <th>Marca</th>
                    <th class="text-nowrap text-center">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($computers as $computer)
                    <tr>
                        <td>{{ $computer->id }}</td>
                        <td>{{ $computer->number }}</td>
                        <td>{{ $computer->brand }}</td>

                        <td class="text-nowrap text-center">

                            <!-- Ver -->
                            <a href="{{ route('computer.show', $computer->id) }}"
                                class="btn btn-outline-success"
                                title="Ver">
                                <i class="bi bi-eye"></i>
                            </a>

                            <!-- Editar -->
                            <a href="{{ route('computer.edit', $computer->id) }}"
                                class="btn btn-outline-info"
                                title="Editar">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <!-- Eliminar -->
                            <form action="{{ route('computer.destroy', $computer->id) }}"
                                method="POST"
                                class="d-inline">
                                @csrf
                                @method('delete')

                                <button type="submit"
                                    class="btn btn-outline-danger"
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
