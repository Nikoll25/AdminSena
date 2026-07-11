@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h3 class="mb-0">Información del computador</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th width="30%">ID</th>
                        <td>{{ $computer->id }}</td>
                    </tr>
                    <tr>
                        <th>number</th>
                        <td>{{ $computer->number }}</td>
                    </tr>
                    <tr>
                        <th>brand</th>
                        <td>{{ $computer->brand }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-end">
                <a href="{{ route('computer.index') }}" class="btn btn-secondary">
                    ← Volver
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
