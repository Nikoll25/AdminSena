<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">
    <div class="container">

       <a class="navbar-brand d-flex align-items-center fw-bold" href="/inicio">
    <img src="{{ asset('img/logo.png') }}" alt="Logo SENA" width="40" height="40" class="me-2">
    <span>Admin SENA</span>
</a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

         <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/inicio">Inicio</a>
                </li>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                       data-bs-toggle="dropdown">
                        Administración
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/area/list">Áreas</a></li>
                        <li><a class="dropdown-item" href="/trainingcenter/list">Centros de formación</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                       data-bs-toggle="dropdown">
                        Académico
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/teacher/list">Instructores</a></li>
                        <li><a class="dropdown-item" href="/course/list">Cursos</a></li>
                        <li><a class="dropdown-item" href="/apprentice/list">Aprendices</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/computer/list">
                        Computadores
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/courseteacher/create">
                        Asignaciones
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>
