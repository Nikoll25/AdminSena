@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Información del Área</h3>
        </div>

        <div class="card-body">

            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th width="30%">ID</th>
                        <td>{{ $area->id }}</td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td>{{ $area->name }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-end">
                <a href="{{ route('area.index') }}" class="btn btn-secondary">
                    ← Volver
                </a>
            </div>

        </div>
    </div>

</div>
@endsection
