@extends('layouts.app')

@section('content')

<style>
    

    .login-wrapper {
        max-width: 1050px;
        width: 100%;
        margin: auto;
    }

    .login-card {
        border: none;
        border-radius: 28px;
        overflow: hidden;
        background: white;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.10);
    }

    /* PANEL IZQUIERDO */

    .login-visual {
        min-height: 600px;
        position: relative;
        overflow: hidden;
        background:
            linear-gradient(135deg, rgba(31, 91, 38, .94), rgba(88, 163, 68, .86)),
            url('{{ asset('img/img2.jpeg') }}') center/cover;
        color: white;
        display: flex;
        align-items: center;
        padding: 50px;
    }

    .login-visual::before {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        border: 1px solid rgba(255,255,255,.18);
        border-radius: 50%;
        right: -100px;
        top: -100px;
    }

    .login-visual::after {
        content: "";
        position: absolute;
        width: 220px;
        height: 220px;
        border: 1px solid rgba(255,255,255,.15);
        border-radius: 50%;
        left: -100px;
        bottom: -80px;
    }

    .visual-content {
        position: relative;
        z-index: 2;
    }

    .sena-icon {
        width: 75px;
        height: 75px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 22px;
        background: rgba(255,255,255,.15);
        border: 1px solid rgba(255,255,255,.25);
        margin-bottom: 30px;
    }

    .sena-icon i {
        font-size: 38px;
    }

    .login-visual h1 {
        font-size: 2.7rem;
        line-height: 1.1;
        font-weight: 800;
        margin-bottom: 20px;
    }

    .login-visual p {
        font-size: 1.05rem;
        line-height: 1.7;
        opacity: .9;
        max-width: 420px;
    }

    .visual-features {
        margin-top: 40px;
    }

    .visual-feature {
        display: flex;
        align-items: center;
        gap: 13px;
        margin-bottom: 18px;
        font-size: .95rem;
    }

    .feature-icon {
        width: 38px;
        height: 38px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255,255,255,.14);
        flex-shrink: 0;
    }

    /* FORMULARIO */

    .login-form {
        min-height: 600px;
        padding: 55px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-title {
        margin-bottom: 35px;
    }

    .form-title .small-title {
        color: #5ea546;
        font-size: .85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 8px;
    }

    .form-title h2 {
        font-weight: 800;
        font-size: 2rem;
        margin-bottom: 8px;
    }

    .form-title p {
        color: #777;
        margin-bottom: 0;
    }

    /* INPUTS */

    .input-group-custom {
        position: relative;
    }

    .input-icon {
        position: absolute;
        left: 17px;
        top: 50%;
        transform: translateY(-50%);
        color: #5ea546;
        z-index: 3;
        font-size: 18px;
    }

.input-custom {
    height: 55px;
    border: 1px solid #e1e5e1;
    border-radius: 14px;
    text-indent: 30px;

    background: #fafcf9;
    transition: all .2s ease;
}

    .input-custom:focus {
        border-color: #5ea546;
        box-shadow: 0 0 0 4px rgba(94, 165, 70, .12);
        background: white;
    }

    /* RECORDAR */

    .remember-box {
        font-size: .9rem;
    }

    .remember-box .form-check-input {
        cursor: pointer;
    }

    .remember-box .form-check-input:checked {
        background-color: #5ea546;
        border-color: #5ea546;
    }

    .forgot-link {
        color: #5ea546;
        text-decoration: none;
        font-weight: 600;
        font-size: .9rem;
    }

    .forgot-link:hover {
        text-decoration: underline;
    }

    /* BOTÓN */

    .login-button {
        height: 55px;
        border: none;
        border-radius: 14px;
        background: linear-gradient(135deg, #5ea546, #438d35);
        font-weight: 700;
        box-shadow: 0 8px 20px rgba(76, 145, 55, .25);
        transition: all .25s ease;
    }

    .login-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 25px rgba(76, 145, 55, .32);
        background: linear-gradient(135deg, #559b3f, #3e8332);
    }

    /* REGISTRO */

    .register-box {
        margin-top: 28px;
        padding-top: 22px;
        border-top: 1px solid #eeeeee;
        text-align: center;
        color: #777;
        font-size: .9rem;
    }

    .register-box a {
        color: #4f963d;
        text-decoration: none;
        font-weight: 700;
    }

    .register-box a:hover {
        text-decoration: underline;
    }

    /* SEGURIDAD */

    .security-note {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        margin-top: 22px;
        color: #999;
        font-size: .78rem;
    }

    .security-note i {
        color: #5ea546;
    }

    /* RESPONSIVE */

    @media (max-width: 767px) {

        .login-page {
            padding: 20px 12px;
        }

        .login-visual {
            min-height: 300px;
            padding: 35px;
        }

        .login-visual h1 {
            font-size: 2rem;
        }

        .visual-features {
            display: none;
        }

        .login-form {
            min-height: auto;
            padding: 40px 28px;
        }

        .form-title h2 {
            font-size: 1.7rem;
        }

    }
</style>

<div class="login-page">

```
<div class="container login-wrapper">

    <div class="login-card">

        <div class="row g-0">

            <!-- ================================= -->
            <!-- PANEL VISUAL -->
            <!-- ================================= -->

            <div class="col-lg-6">

                <div class="login-visual">

                    <div class="visual-content">

                        <div class="sena-icon">
                            <i class="bi bi-mortarboard-fill"></i>
                        </div>

                        <h1>
                            Bienvenido a<br>
                            AdminSena
                        </h1>

                        <p>
                            Gestiona de manera sencilla y organizada
                            la información académica y administrativa
                            de tu centro de formación.
                        </p>


                        <div class="visual-features">

                            <div class="visual-feature">

                                <div class="feature-icon">
                                    <i class="bi bi-people-fill"></i>
                                </div>

                                <span>
                                    Gestión de aprendices
                                </span>

                            </div>


                            <div class="visual-feature">

                                <div class="feature-icon">
                                    <i class="bi bi-journal-bookmark-fill"></i>
                                </div>

                                <span>
                                    Administración de cursos
                                </span>

                            </div>


                            <div class="visual-feature">

                                <div class="feature-icon">
                                    <i class="bi bi-pc-display"></i>
                                </div>

                                <span>
                                    Control de equipos
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================= -->
            <!-- FORMULARIO -->
            <!-- ================================= -->

            <div class="col-lg-6">

                <div class="login-form">

                    <div class="form-title">

                        <div class="small-title">
                            Panel administrativo
                        </div>

                        <h2>
                            Iniciar sesión
                        </h2>

                        <p>
                            Ingresa tus credenciales para continuar.
                        </p>

                    </div>


                    <form action="#" method="POST">

                        @csrf


                        <!-- CORREO -->

                        <div class="mb-4">

                            <label
                                for="email"
                                class="form-label fw-semibold"
                            >
                                Correo electrónico
                            </label>

                            <div class="input-group-custom">

                                <i class="bi bi-envelope input-icon"></i>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="form-control input-custom"
                                    placeholder="correo@ejemplo.com"
                                    required
                                >

                            </div>

                        </div>


                        <!-- CONTRASEÑA -->

                        <div class="mb-3">

                            <label
                                for="password"
                                class="form-label fw-semibold"
                            >
                                Contraseña
                            </label>

                            <div class="input-group-custom">

                                <i class="bi bi-lock input-icon"></i>

                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    class="form-control input-custom"
                                    placeholder="Ingresa tu contraseña"
                                    required
                                >

                            </div>

                        </div>


                        <!-- RECORDAR / RECUPERAR -->

                        <div class="d-flex justify-content-between align-items-center mb-4">

                            <div class="form-check remember-box">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="remember"
                                    name="remember"
                                >

                                <label
                                    class="form-check-label"
                                    for="remember"
                                >
                                    Recordarme
                                </label>

                            </div>


                            <a
                                href="#"
                                class="forgot-link"
                            >
                                ¿Olvidaste tu contraseña?
                            </a>

                        </div>


                        <!-- BOTÓN -->

                        <button
                            type="button"
                            class="btn btn-success login-button w-100"
                        >

                            <i class="bi bi-box-arrow-in-right me-2"></i>

                            Iniciar sesión

                        </button>

                    </form>


                    <!-- REGISTRO -->

                    <div class="register-box">

                        ¿Aún no tienes una cuenta?

                        <a href="/register">
                            Crear una cuenta
                        </a>

                    </div>


                    <!-- SEGURIDAD -->

                    <div class="security-note">

                        <i class="bi bi-shield-check"></i>

                        Acceso seguro al sistema administrativo

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
```

</div>

@endsection
