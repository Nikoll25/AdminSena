@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Lista de cursos</h1>

    <table id="idCourse" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Número </th>
                <th>Día</th>
                <th>Area</th>
                <th>Centro de formación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->number }}</td>
                    <td>{{ $course->day }}</td>
                    <td>{{ $course->area->name }}</td>
                    <td>{{ $course->trainingCenter->name }}</td>

                    <td>
                        <a href="{{ route('course.show', $course->id) }}" class="btn btn-primary btn-sm">
                            Mostrar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-secondary" href="/course/create">
        Ingresar Curso
    </a>

</div>
@endsection
