@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Lista de Computadores</h1>

    <table id="idComputer" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>numero</th>
                <th>Marca</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($computers as $computer)
                <tr>
                    <td>{{ $computer->id }}</td>
                    <td>{{ $computer->number }}</td>
                    <td>{{ $computer->brand }}</td>

                    <td>
                        <a href="{{ route('computer.show', $computer->id) }}" class="btn btn-primary btn-sm">
                            Mostrar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-secondary" href="/computer/create">
        Ingresar Computador
    </a>

</div>
@endsection
