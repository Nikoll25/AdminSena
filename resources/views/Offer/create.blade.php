@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card border-0 shadow-lg rounded-4">

                    <div class="card-header bg-success text-white text-center py-3 rounded-top-4">
                        <h3 class="mb-0">
                            <i class="bi bi-person-badge"></i>
                            Registrar Oferta
                        </h3>
                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('offer.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">
                                    Nombre de la oferta
                                </label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name"
                                    placeholder="Ingrese el nombre de la oferta" required>
                            </div>

                            <div class="mb-4">
                                <label for="description" class="form-label fw-bold">
                                    Descripción
                                </label>
                                <input type="text" class="form-control form-control-lg" id="description"
                                    name="description" placeholder="Ingrese la descripción de la oferta" required>
                            </div>
                            <div class="mb-4"> <label for="modality" class="form-label fw-bold">Modalidad de
                                    formación</label>
                                <select name="modality" id="modality" class="form-select">
                                    <option value="">Seleccione una opción</option>
                                    <option value="presencial">Presencial</option>
                                    <option value="virtual">Virtual</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="startDate" class="form-label fw-bold">
                                    Fecha de inicio
                                </label>
                                <input type="date" class="form-control form-control-lg" id="startDate" name="startDate"
                                    placeholder="Ingrese la fecha de inicio de la oferta" required>
                            </div>
                            <div class="mb-4">
                                <label for="endDate" class="form-label fw-bold">
                                    Fecha de fin
                                </label>
                                <input type="date" class="form-control form-control-lg" id="endDate" name="endDate"
                                    placeholder="Ingrese la fecha de fin de la oferta" required>
                            </div>
                            <div class="mb-4">
                                <label for="quota" class="form-label fw-bold">
                                    Cupos
                                </label>
                                <input type="integer" class="form-control form-control-lg" id="quota" name="quota"
                                    placeholder="Ingrese los cupos disponibles" required>
                            </div>
                            <div class="mb-3">
                                <label for="urlFoto" class="form-label">Foto de la oferta</label>
                                <input type="file" name="urlFoto" id="urlFoto" class="form-control" accept="image/*"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="area_id" class="form-label fw-bold">
                                    Área
                                </label>

                                <select class="form-select form-select-lg" name="area_id" id="area_id" required>

                                    <option value="">
                                        Seleccione un área
                                    </option>

                                    @foreach ($areas as $area)
                                        <option value="{{ $area->id }}">
                                            {{ $area->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="training_center_id" class="form-label fw-bold">
                                    Centro de formación
                                </label>

                                <select class="form-select form-select-lg" name="training_center_id" id="training_center_id"
                                    required>

                                    <option value="">
                                        Seleccione un centro de formación
                                    </option>

                                    @foreach ($trainingCenters as $trainingCenter)
                                        <option value="{{ $trainingCenter->id }}">
                                            {{ $trainingCenter->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="d-flex justify-content-end gap-2">

                                <a href="{{ route('offer.index') }}" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-left"></i>
                                    Cancelar
                                </a>

                                <button type="submit" class="btn btn-success px-4">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Guardar
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
