@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-secondary  text-white">
            <h3 class="mb-0">Registrar Aprendiz</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('Apprentice.store') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            placeholder="Ingrese el nombre"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder="Ingrese el correo"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="cell_number" class="form-label">Número de teléfono</label>
                        <input
                            type="text"
                            class="form-control"
                            id="cell_number"
                            name="cell_number"
                            placeholder="Ingrese el número de teléfono"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="course_id" class="form-label">Curso</label>
                        <select class="form-select" id="course_id" name="course_id" required>
                            <option value="">Seleccione un curso</option>

                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">
                                    {{ $course->number }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-4">
                        <label for="computer_id" class="form-label">Computador</label>
                        <select class="form-select" id="computer_id" name="computer_id" required>
                            <option value="">Seleccione un computador</option>

                            @foreach($computers as $computer)
                                <option value="{{ $computer->id }}">
                                    {{ $computer->number }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('apprentice.index') }}" class="btn btn-secondary">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-success">
                        Guardar Aprendiz
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
