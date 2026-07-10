@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Lista de Instructores</h1>

    <table id="idTeacher" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>correo</th>
                <th>Area</th>
                <th>Centro de Formación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->area->name }}</td>
                    <td>{{ $teacher->trainingCenter->name }}</td>

                    <td>
                        <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-primary btn-sm">
                            Mostrar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-secondary" href="/teacher/create">
        Ingresar instructor
    </a>
</div>
@endsection
