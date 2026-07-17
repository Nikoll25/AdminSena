@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-4">Lista de cursos</h1>
        <a href="/course/create" class="btn btn-success rounded-pill px-3 py-2 shadow-sm">
            <i class="bi bi-plus-circle"></i>
            Agregar Curso
        </a>
        </div>
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

                        <td class="text-nowrap text-center">
                            <a href="{{ route('course.show', $course->id) }}" class="btn btn-outline-success ">
                                <i class="bi bi-eye"></i>
                            </a>

                            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-outline-info ">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('course.destroy', $course->id) }}" method="POST" class="d-inline">
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
