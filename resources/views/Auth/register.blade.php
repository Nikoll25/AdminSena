@extends('layouts.app')

@section('content')

<style>
    .register-wrapper {
        max-width: 1100px;
        width: 100%;
        margin: auto;
    }

    .register-card {
        border: none;
        border-radius: 28px;
        overflow: hidden;
        background: white;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.10);
    }

    /* =========================================
       PANEL VISUAL
    ========================================= */

    .register-visual {
        min-height: 650px;
        height: 100%;
        position: relative;
        overflow: hidden;

        background:
            linear-gradient(
                135deg,
                rgba(31, 91, 38, .95),
                rgba(88, 163, 68, .84)
            ),
            url('{{ asset('img/img1.webp') }}') center/cover;

        color: white;

        display: flex;
        align-items: center;

        padding: 50px;
    }

    .register-visual::before {
        content: "";
        position: absolute;

        width: 330px;
        height: 330px;

        border: 1px solid rgba(255,255,255,.18);
        border-radius: 50%;

        right: -120px;
        top: -120px;
    }

    .register-visual::after {
        content: "";
        position: absolute;

        width: 250px;
        height: 250px;

        border: 1px solid rgba(255,255,255,.14);
        border-radius: 50%;

        left: -120px;
        bottom: -100px;
    }

    .visual-content {
        position: relative;
        z-index: 2;
    }

    .register-icon {
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

    .register-icon i {
        font-size: 36px;
    }

    .register-visual h1 {
        font-size: 2.65rem;
        line-height: 1.1;
        font-weight: 800;
        margin-bottom: 20px;
    }

    .register-visual p {
        font-size: 1.03rem;
        line-height: 1.7;
        opacity: .9;
        max-width: 420px;
    }

    /* =========================================
       BENEFICIOS
    ========================================= */

    .register-benefits {
        margin-top: 38px;
    }

    .benefit {
        display: flex;
        align-items: center;
        gap: 13px;

        margin-bottom: 18px;

        font-size: .95rem;
    }

    .benefit-icon {
        width: 40px;
        height: 40px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 12px;

        background: rgba(255,255,255,.14);

        flex-shrink: 0;
    }

    /* =========================================
       FORMULARIO
    ========================================= */

    .register-form {
        min-height: 650px;

        padding: 50px 55px;

        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-heading {
        margin-bottom: 30px;
    }

    .form-heading .mini-title {
        color: #5ea546;

        font-size: .82rem;
        font-weight: 700;

        text-transform: uppercase;
        letter-spacing: 1.5px;

        margin-bottom: 7px;
    }

    .form-heading h2 {
        font-size: 2rem;
        font-weight: 800;

        margin-bottom: 7px;
    }

    .form-heading p {
        color: #777;
        margin-bottom: 0;
    }

    .field-label {
        font-weight: 600;
        font-size: .9rem;
        margin-bottom: 8px;
    }

    .field-wrapper {
        position: relative;
    }

    .field-icon {
        position: absolute;
        left: 17px;
        top: 50%;
        transform: translateY(-50%);
        color: #5ea546;
        z-index: 3;
        font-size: 17px;
    }

    .register-input {
        height: 52px;
        border: 1px solid #e1e5e1;
        border-radius: 13px;
        background: #fafcf9;
        transition: all .2s ease;
        text-indent: 30px;

    }

    .register-input:focus {
        border-color: #5ea546;
        box-shadow:
            0 0 0 4px rgba(94,165,70,.12);

        background: white;
    }

    /* =========================================
       TERMINOS
    ========================================= */

    .terms-box {
        background: #f7faf6;

        border: 1px solid #e7eee4;

        border-radius: 13px;

        padding: 13px 15px;

        font-size: .88rem;
    }

    .terms-box .form-check-input {
        cursor: pointer;
    }

    .terms-box .form-check-input:checked {
        background-color: #5ea546;
        border-color: #5ea546;
    }

    .terms-box a {
        color: #4f963d;
        font-weight: 600;
        text-decoration: none;
    }

    .terms-box a:hover {
        text-decoration: underline;
    }

    /* =========================================
       BOTÓN
    ========================================= */

    .register-button {
        height: 54px;

        border: none;

        border-radius: 14px;

        background:
            linear-gradient(
                135deg,
                #5ea546,
                #438d35
            );

        font-weight: 700;

        box-shadow:
            0 8px 20px rgba(76,145,55,.25);

        transition: all .25s ease;
    }

    .register-button:hover {
        transform: translateY(-2px);

        box-shadow:
            0 12px 25px rgba(76,145,55,.32);

        background:
            linear-gradient(
                135deg,
                #559b3f,
                #3e8332
            );
    }

    /* =========================================
       LOGIN
    ========================================= */

    .login-link {
        margin-top: 25px;

        padding-top: 20px;

        border-top: 1px solid #eeeeee;

        text-align: center;

        color: #777;

        font-size: .9rem;
    }

    .login-link a {
        color: #4f963d;

        text-decoration: none;

        font-weight: 700;
    }

    .login-link a:hover {
        text-decoration: underline;
    }

    /* =========================================
       SEGURIDAD
    ========================================= */

    .security-note {
        display: flex;

        align-items: center;
        justify-content: center;

        gap: 7px;

        margin-top: 18px;

        color: #999;

        font-size: .77rem;
    }

    .security-note i {
        color: #5ea546;
    }

    /* =========================================
       RESPONSIVE
    ========================================= */

    @media (max-width: 991px) {

        .register-visual {
            min-height: 350px;
        }

        .register-form {
            min-height: auto;
        }

        .register-benefits {
            display: none;
        }

    }

    @media (max-width: 767px) {

        .register-page {
            padding: 20px 12px;
        }

        .register-visual {
            min-height: 300px;

            padding: 35px;
        }

        .register-visual h1 {
            font-size: 2rem;
        }

        .register-form {
            padding: 40px 28px;
        }

        .form-heading h2 {
            font-size: 1.7rem;
        }

    }
</style>

<div class="register-page">

```
<div class="container register-wrapper">

    <div class="register-card">

        <div class="row g-0">

            <!-- ================================= -->
            <!-- PANEL VISUAL
            ================================== -->

            <div class="col-lg-6">

                <div class="register-visual">

                    <div class="visual-content">

                        <div class="register-icon">

                            <i class="bi bi-person-plus-fill"></i>

                        </div>


                        <h1>

                            Crea tu cuenta en
                            <br>

                            AdminSena

                        </h1>


                        <p>

                            Forma parte de la plataforma administrativa
                            y accede a las herramientas necesarias para
                            gestionar la información de manera organizada.

                        </p>


                        <div class="register-benefits">

                            <div class="benefit">

                                <div class="benefit-icon">

                                    <i class="bi bi-speedometer2"></i>

                                </div>

                                <span>
                                    Administración rápida y sencilla
                                </span>

                            </div>


                            <div class="benefit">

                                <div class="benefit-icon">

                                    <i class="bi bi-database-check"></i>

                                </div>

                                <span>
                                    Información centralizada
                                </span>

                            </div>


                            <div class="benefit">

                                <div class="benefit-icon">

                                    <i class="bi bi-shield-check"></i>

                                </div>

                                <span>
                                    Acceso seguro al sistema
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ================================= -->
            <!-- FORMULARIO
            ================================== -->

            <div class="col-lg-6">

                <div class="register-form">

                    <div class="form-heading">

                        <div class="mini-title">
                            Nuevo usuario
                        </div>

                        <h2>
                            Crear una cuenta
                        </h2>

                        <p>
                            Completa tus datos para registrarte.
                        </p>

                    </div>


                    <form action="#" method="POST">

                        @csrf


                        <!-- ================================= -->
                        <!-- NOMBRE
                        ================================== -->

                        <div class="mb-3">

                            <label
                                for="name"
                                class="field-label"
                            >
                                Nombre completo
                            </label>


                            <div class="field-wrapper">

                                <i class="bi bi-person field-icon"></i>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="form-control register-input"
                                    placeholder="Ingresa tu nombre completo"
                                    required
                                >

                            </div>

                        </div>


                        <!-- ================================= -->
                        <!-- CORREO
                        ================================== -->

                        <div class="mb-3">

                            <label
                                for="email"
                                class="field-label"
                            >Correo electrónico
                            </label>
                            <div class="field-wrapper">

                                <i class="bi bi-envelope field-icon"></i>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="form-control register-input"
                                    placeholder="correo@ejemplo.com"
                                    required
                                >

                            </div>

                        </div>


                        <!-- ================================= -->
                        <!-- CONTRASEÑAS
                        ================================== -->

                        <div class="row">

                            <div class="col-md-6">

                                <div class="mb-3">

                                    <label
                                        for="password"
                                        class="field-label"
                                    >
                                        Contraseña
                                    </label>


                                    <div class="field-wrapper">

                                        <i class="bi bi-lock field-icon"></i>

                                        <input
                                            type="password"
                                            id="password"
                                            name="password"
                                            class="form-control register-input"
                                            placeholder="Contraseña"
                                            required
                                        >

                                    </div>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="mb-3">

                                    <label
                                        for="password_confirmation"
                                        class="field-label"
                                    >
                                        Confirmar contraseña
                                    </label>


                                    <div class="field-wrapper">

                                        <i class="bi bi-shield-lock field-icon"></i>

                                        <input
                                            type="password"
                                            id="password_confirmation"
                                            name="password_confirmation"
                                            class="form-control register-input"
                                            placeholder="Repetir contraseña"
                                            required
                                        >

                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- ================================= -->
                        <!-- TERMINOS
                        ================================== -->

                        <div class="terms-box mb-4">

                            <div class="form-check">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="terms"
                                    name="terms"
                                    required
                                >

                                <label
                                    class="form-check-label"
                                    for="terms"
                                >

                                    Acepto los

                                    <a href="#">
                                        términos y condiciones
                                    </a>

                                </label>

                            </div>

                        </div>


                        <!-- ================================= -->
                        <!-- BOTÓN
                        ================================== -->

                        <button
                            type="submit"
                            class="btn btn-success register-button w-100"
                        >

                            <i class="bi bi-person-plus-fill me-2"></i>

                            Crear cuenta

                        </button>

                    </form>


                    <!-- ================================= -->
                    <!-- LOGIN
                    ================================== -->

                    <div class="login-link">

                        ¿Ya tienes una cuenta?

                        <a href="/login">
                            Iniciar sesión
                        </a>

                    </div>


                    <!-- ================================= -->
                    <!-- SEGURIDAD
                    ================================== -->

                    <div class="security-note">

                        <i class="bi bi-shield-check"></i>

                        Tus datos serán tratados de forma segura

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
```

</div>

@endsection
