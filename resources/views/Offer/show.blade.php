@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Información de la oferta</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th width="30%">ID</th>
                        <td>{{ $offer->id }}</td>
                    </tr>
                    <tr>
                        <th>nombre</th>
                        <td>{{ $offer->name }}</td>
                    </tr>
                    <tr>
                        <th>Descripción</th>
                        <td>{{ $offer->description }}</td>
                    </tr>
                    <tr>
                        <th>Modalidad</th>
                        <td>{{ $offer->modality }}</td>
                    </tr><tr>
                        <th>Fecha de inicio</th>
                        <td>{{ $offer->startDate }}</td>
                    </tr><tr>
                        <th>Fecha de fin</th>
                        <td>{{ $offer->endDate }}</td>
                    </tr><tr>
                        <th>Cupos</th>
                        <td>{{ $offer->quota }}</td>
                    </tr>
                    <tr>
                        <th>Area</th>
                        <td>{{ $offer->area->name }}</td>
                    </tr>
                    <tr>
                        <th>Centro de formación</th>
                        <td>{{ $offer->trainingCenter->name }}</td>
                    </tr>

                </tbody>
            </table>
            <div class="text-end">
                <a href="{{ route('offer.index') }}" class="btn btn-secondary">
                    ← Volver
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
