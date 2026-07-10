@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Información del Centro de formación</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th width="30%">ID</th>
                        <td>{{ $trainingcenter->id }}</td>
                    </tr>
                    <tr>
                        <th>nombre</th>
                        <td>{{ $trainingcenter->name }}</td>
                    </tr>
                    <tr>
                        <th>Ubicación</th>
                        <td>{{ $trainingcenter->location }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-end">
                <a href="{{ route('trainingcenter.index') }}" class="btn btn-secondary">
                    ← Volver
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
