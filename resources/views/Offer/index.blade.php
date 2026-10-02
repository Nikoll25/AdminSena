@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <!-- ENCABEZADO -->
        <div
            class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4 pb-2 border-bottom">
            <div>
                <h1 class="fw-bold h2 text-dark m-0">Lista de Ofertas</h1>
                <p class="text-muted small m-0">Administración y consulta del catálogo de ofertas académicas</p>
            </div>

            <a href="/offer/create"
                class="btn btn-success rounded-pill px-4 py-2 shadow-sm d-inline-flex align-items-center justify-content-center gap-2">
                <i class="bi bi-plus-circle fs-5"></i>
                <span class="fw-bold">Agregar Oferta</span>
            </a>
        </div>
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div class="table-responsive">
                <table id="idOffer" class="table table-hover align-middle mb-0">
                    <thead class="bg-success text-white">
                        <tr>
                            <th class="ps-4 py-3">Id</th>
                            <th class="py-3">Nombre</th>
                            <th class="py-3">Descripción</th>
                            <th class="py-3">Modalidad</th>
                            <th class="py-3">Fecha de inicio</th>
                            <th class="py-3">Fecha de fin</th>
                            <th class="py-3 text-center">Cupos</th>
                            <th class="py-3 text-center">Foto</th>
                            <th class="py-3">Área</th>
                            <th class="py-3">Centro de Formación</th>
                            <th class="py-3 text-center pe-4 text-nowrap">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($offers as $offer)
                            <tr>
                                <!-- 1. ID -->
                                <td class="ps-4 fw-bold text-secondary">
                                    #{{ $offer->id }}
                                </td>

                                <!-- 2. NOMBRE -->
                                <td class="fw-bold text-dark">
                                    {{ $offer->name }}
                                </td>

                                <!-- 3. DESCRIPCIÓN -->
                                <td>
                                    <span class="text-muted small text-truncate d-inline-block" style="max-width: 180px;"
                                        title="{{ $offer->description }}">
                                        {{ $offer->description }}
                                    </span>
                                </td>

                                <!-- 4. MODALIDAD -->
                                <td>
                                    <span
                                        class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-1 fw-medium">
                                        {{ $offer->modality }}
                                    </span>
                                </td>

                                <!-- 5. FECHA DE INICIO -->
                                <td>
                                    <small class="text-dark fw-medium">
                                        <i class="bi bi-calendar-event me-1 text-success"></i>{{ $offer->startDate }}
                                    </small>
                                </td>

                                <!-- 6. FECHA DE FIN -->
                                <td>
                                    <small class="text-muted fw-medium">
                                        <i class="bi bi-calendar-check me-1 text-secondary"></i>{{ $offer->endDate }}
                                    </small>
                                </td>

                                <!-- 7. CUPOS -->
                                <td class="text-center">
                                    <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-bold shadow-sm">
                                        {{ $offer->quota }}
                                    </span>
                                </td>

                                <td class="text-center">
                                    <img src="{{ asset('storage/img/' . $offer->urlFoto) }}" alt="Foto de la oferta"
                                        width="55" height="55" class="rounded-3 object-fit-cover shadow-sm border"
                                        >
                                </td>

                                <!-- 9. ÁREA -->
                                <td>
                                    <span class="fw-medium text-dark">
                                        <i class="bi bi-geo-alt text-success me-1"></i>{{ $offer->area->name ?? 'N/A' }}
                                    </span>
                                </td>

                                <!-- 10. CENTRO DE FORMACIÓN -->
                                <td>
                                    <small class="text-secondary fw-medium">
                                        <i class="bi bi-building me-1"></i>{{ $offer->trainingCenter->name ?? 'N/A' }}
                                    </small>
                                </td>

                                <td class="text-center pe-4 text-nowrap">
                                    <div class="d-inline-flex align-items-center justify-content-center gap-2">

                                        <a href="{{ route('offer.show', $offer->id) }}"
                                            class="btn btn-sm btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm"
                                            style="width: 34px; height: 34px;" title="Ver">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <a href="{{ route('offer.edit', $offer->id) }}"
                                            class="btn btn-sm btn-outline-info rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm"
                                            style="width: 34px; height: 34px;" title="Editar">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        <form action="{{ route('offer.destroy', $offer->id) }}" method="POST"
                                            class="d-inline m-0 p-0">
                                            @csrf
                                            @method('delete')

                                            <button type="submit"
                                                class="btn btn-sm btn-outline-danger rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm"
                                                style="width: 34px; height: 34px;" title="Eliminar">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <style>
        .object-fit-cover {
            object-fit: cover;
        }
    </style>
@endsection
