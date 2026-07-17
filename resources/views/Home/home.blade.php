@extends('layouts.app')

@section('content')
    <!-- HERO -->
        <!-- CARRUSEL -->
        <div id="carouselInicio" class="carousel slide carousel-fade mt-4 mb-5 shadow rounded overflow-hidden"
            data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselInicio" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselInicio" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselInicio" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="{{ asset('img/img1.webp') }}" class="d-block w-100" style="height:420px; object-fit:cover;"
                        alt="Banner 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="fw-bold display-5" style="text-shadow:5px 5px 8px rgba(0,0,0,.8);">Bienvenido a Admin
                            SENA</h2>
                        <p class="fs-5" style="text-shadow:3px 3px 6px rgba(0,0,0,.8);">Gestiona aprendices, cursos,
                            instructores y centros de formación desde un solo lugar.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/img2.jpeg') }}" class="d-block w-100" style="height:420px; object-fit:cover;"
                        alt="Banner 2">

                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="fw-bold display-5" style="text-shadow:5px 5px 8px rgba(0,0,0,.8);">Formación Profesional
                            Integral</h2>
                        <p class="fs-5" style="text-shadow:3px 3px 6px rgba(0,0,0,.8);">Consulta y administra toda la
                            información académica de manera rápida y sencilla.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/img3.jpg') }}" class="d-block w-100" style="height:420px; object-fit:cover;"
                        alt="Banner 3">

                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="fw-bold display-5" style="text-shadow:5px 5px 8px rgba(0,0,0,.8);">Tecnología al servicio
                            de la educación</h2>
                        <p class="fs-5" style="text-shadow:3px 3px 6px rgba(0,0,0,.8);">Un sistema diseñado para facilitar
                            la gestión administrativa del SENA.</p>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselInicio" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselInicio" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>

    <!-- MODULOS -->
    <div class="container mt-5">

        <h2 class="text-center fw-bold mb-5">
            Accesos rápidos
        </h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body">

                        <i class="bi bi-mortarboard-fill display-3 text-success"></i>

                        <h4 class="mt-3">Aprendices</h4>

                        <p>
                            Gestiona toda la información de los aprendices.
                        </p>

                        <a href="{{ route('apprentice.index') }}" class="btn btn-success rounded-pill">
                            Entrar
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body">

                        <i class="bi bi-book-fill display-3 text-success"></i>

                        <h4 class="mt-3">Cursos</h4>

                        <p>
                            Consulta y administra los cursos.
                        </p>

                        <a href="{{ route('course.index') }}" class="btn btn-success rounded-pill">
                            Entrar
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body">

                        <i class="bi bi-pc-display display-3 text-success"></i>

                        <h4 class="mt-3">Computadores</h4>

                        <p>
                            Control del inventario de equipos.
                        </p>

                        <a href="{{ route('computer.index') }}" class="btn btn-success rounded-pill">
                            Entrar
                        </a>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- ESTADISTICAS -->

    <div class="container mt-5">

        <div class="row text-center">

            <div class="col-md-3">

                <div class="card border-0 shadow">

                    <div class="card-body">

                        <i class="bi bi-people-fill display-5 text-success"></i>

                        <h2 class="fw-bold mt-2">
                            {{ $apprentices }}
                        </h2>

                        <p>Aprendices</p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card border-0 shadow">

                    <div class="card-body">

                        <i class="bi bi-book display-5 text-success"></i>

                        <h2 class="fw-bold mt-2">
                            {{ $courses }}
                        </h2>

                        <p>Cursos</p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card border-0 shadow">

                    <div class="card-body">

                        <i class="bi bi-building display-5 text-success"></i>

                        <h2 class="fw-bold mt-2">
                            {{ $trainingCenters }}
                        </h2>

                        <p>Centros</p>

                    </div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card border-0 shadow">

                    <div class="card-body">

                        <i class="bi bi-laptop display-5 text-success"></i>

                        <h2 class="fw-bold mt-2">
                            {{ $computers }}
                        </h2>

                        <p>Computadores</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- INFORMACION -->

    <div class="container mt-5">

        <h2 class="text-center fw-bold mb-4">
            Nuestra Institución
        </h2>

        <div class="row">

            <div class="col-md-6">

                <div class="card shadow border-0 h-100">

                    <div class="card-body">

                        <h3>
                            <i class="bi bi-bullseye text-success"></i>

                            Misión
                        </h3>

                        <hr>

                        <p>
                            El SENA está encargado de brindar formación profesional
                            integral que contribuya al desarrollo social,
                            tecnológico y económico del país.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-6">

                <div class="card shadow border-0 h-100">

                    <div class="card-body">

                        <h3>

                            <i class="bi bi-stars text-success"></i>

                            Visión

                        </h3>

                        <hr>

                        <p>

                            Consolidarse como una institución líder en formación
                            profesional integral, reconocida por su innovación,
                            calidad y aporte al desarrollo del país.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
