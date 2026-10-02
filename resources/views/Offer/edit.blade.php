@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-header bg-success text-white text-center py-3">
                        <h3 class="mb-0">
                            <i class="bi bi-pencil-square me-2"></i>
                            Actualizar Oferta
                        </h3>
                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('offer.update', $offer) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">
                                    <i class="bi bi-person-fill text-success me-1"></i>
                                    Nombre de la oferta
                                </label>

                                <input type="text" id="name" name="name" class="form-control form-control-lg"
                                    value="{{ old('name', $offer->name) }}" placeholder="Ingrese el nombre de la oferta"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="description" class="form-label fw-bold">
                                    <i class="bi bi-envelope-fill text-success me-1"></i>
                                    Descripción
                                </label>
                                <input type="text" id="description" name="description"
                                    class="form-control form-control-lg"
                                    value="{{ old('description', $offer->description) }}"
                                    placeholder="Ingrese la descripción de la oferta" required>
                            </div>
                            <div class="mb-4">
                                <label for="modality" class="form-label fw-bold">
                                    Modalidad de formación
                                </label>

                                <select name="modality" id="modality" class="form-select" required>

                                    <option value="" disabled
                                        {{ old('modality', $offer->modality) == '' ? 'selected' : '' }}>
                                        Seleccione una opción
                                    </option>

                                    <option value="presencial"
                                        {{ old('modality', $offer->modality) == 'presencial' ? 'selected' : '' }}>
                                        Presencial
                                    </option>

                                    <option value="virtual"
                                        {{ old('modality', $offer->modality) == 'virtual' ? 'selected' : '' }}>
                                        Virtual
                                    </option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="startDate" class="form-label fw-bold">
                                    <i class="bi bi-envelope-fill text-success me-1"></i>
                                    Fecha de inicio
                                </label>
                                <input type="date" id="startDate" name="startDate"
                                    class="form-control form-control-lg"
                                    value="{{ old('startDate', $offer->startDate) }}"
                                    placeholder="Ingrese la fecha de inicio de la oferta" required>
                            </div>
                            <div class="mb-4">
                                <label for="endDate" class="form-label fw-bold">
                                    <i class="bi bi-envelope-fill text-success me-1"></i>
                                    Fecha de fin
                                </label>
                                <input type="date" id="endDate" name="endDate"
                                    class="form-control form-control-lg"
                                    value="{{ old('endDate', $offer->endDate) }}"
                                    placeholder="Ingrese la fecha de fin de la oferta" required>
                            </div>
                             <div class="mb-4">
                                <label for="quota" class="form-label fw-bold">
                                    <i class="bi bi-envelope-fill text-success me-1"></i>
                                    Cupos
                                </label>
                                <input type="number" id="quota" name="quota"
                                    class="form-control form-control-lg"
                                    value="{{ old('quota', $offer->quota) }}"
                                    placeholder="Ingrese el numero de cupos disponibles" required>
                            </div>
                            <div class="mb-4">
                                <label for="area_id" class="form-label fw-bold">
                                    <i class="bi bi-diagram-3-fill text-success me-1"></i>
                                    Área
                                </label>
                                <select name="area_id" class="form-select">
                                    @foreach ($areas as $area)
                                        <option value="{{ $area->id }}"
                                            {{ $offer->area_id == $area->id ? 'selected' : '' }}>
                                            {{ $area->id }} - {{ $area->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="training_center_id" class="form-label fw-bold">
                                    <i class="bi bi-building text-success me-1"></i>
                                    Centro de Formación
                                </label>
                                <select name="trainingCenter_id" class="form-select">
                                    @foreach ($trainingcenters as $trainingcenter)
                                        <option value="{{ $trainingcenter->id }}"
                                            {{ $offer->trainingCenter_id == $trainingcenter->id ? 'selected' : '' }}>
                                            {{ $trainingcenter->id }} - {{ $trainingcenter->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('offer.index') }}" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-left me-1"></i>
                                    Cancelar
                                </a>

                                <button type="submit" class="btn btn-success px-4">
                                    <i class="bi bi-check-circle-fill me-1"></i>
                                    Actualizar
                                </button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
