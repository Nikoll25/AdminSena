<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">
    <div class="container">

        <a class="navbar-brand fw-bold" href="/">
            -Admin SENA-
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

         <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                       data-bs-toggle="dropdown">
                        Administración
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/Area/create">Áreas</a></li>
                        <li><a class="dropdown-item" href="/TrainingCenter/create">Centros de formación</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                       data-bs-toggle="dropdown">
                        Académico
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/teacher/create">Instructores</a></li>
                        <li><a class="dropdown-item" href="/course/create">Cursos</a></li>
                        <li><a class="dropdown-item" href="/apprentice/create">Aprendices</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Computer/create">
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