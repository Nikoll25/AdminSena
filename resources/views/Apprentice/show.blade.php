@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Información del aprendiz</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th width="30%">ID</th>
                        <td>{{ $apprentice->id }}</td>
                    </tr>
                    <tr>
                        <th>nombre</th>
                        <td>{{ $apprentice->name }}</td>
                    </tr>
                    <tr>
                        <th>correo electrónico</th>
                        <td>{{ $apprentice->email }}</td>
                    </tr>
                    <tr>
                        <th>Número de teléfono</th>
                        <td>{{ $apprentice->cell_number }}</td>
                    </tr>
                    <tr>
                        <th>Curso</th>
                        <td>{{ $apprentice->course->number }}</td>
                    </tr>
                    <tr>
                        <th>Computador</th>
                        <td>{{ $apprentice->computer->brand }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-end">
                <a href="{{ route('apprentice.index') }}" class="btn btn-secondary">
                    ← Volver
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
