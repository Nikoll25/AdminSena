@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Información del curso</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th width="30%">ID</th>
                        <td>{{ $course->id }}</td>
                    </tr>
                    <tr>
                        <th>Número de ficha</th>
                        <td>{{ $course->number }}</td>
                    </tr>
                    <tr>
                        <th>día</th>
                        <td>{{ $course->day }}</td>
                    </tr>
                    <tr>
                        <th>Area</th>
                        <td>{{ $course->area->name }}</td>
                    </tr>
                    <tr>
                        <th>Centro de formación</th>
                        <td>{{ $course->trainingCenter->name }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-end">
                <a href="{{ route('course.index') }}" class="btn btn-secondary">
                    ← Volver
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
