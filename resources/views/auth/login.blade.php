<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Leví Arista">
    <meta name="description" content="Sitio web del Círculo de Estudios de Estudios Logos y Ethos" />
    <meta name="keywords" content="circulo estudios logos ethos, circulo estudios derecho">

    <title>Logos y Ethos | Login </title>

    <!-- Icon -->
    <link rel="shortcut icon" href="{{ asset('images/favicons/favicon-16x16.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicons/favicon-16x16.png') }}" type="image/x-icon">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

</head>

<body style="height: 100vh">

    <div class="login-container">

        <div class="login-background">
            <img src="{{ asset('images/login-bg.png') }}" alt="">
        </div>

        <div class="login-form">

            <header>
                <img src="{{ asset('images/logos-y-ethos-logo.png') }}" alt="">
                <p>CÍRCULO DE ESTUDIOS</p>
                <h1>LOGOS Y ETHOS</h1>
            </header>

            <!-- Session Status -->
            <x-auth-session-status class="messages" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="messages" :errors="$errors" />

            <section>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        {{-- <x-label for="email" :value="__('Email')" /> --}}
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.294 7.29105C17.294 10.2281 14.9391 12.5831 12 12.5831C9.0619 12.5831 6.70601 10.2281 6.70601 7.29105C6.70601 4.35402 9.0619 2 12 2C14.9391 2 17.294 4.35402 17.294 7.29105ZM12 22C7.66237 22 4 21.295 4 18.575C4 15.8539 7.68538 15.1739 12 15.1739C16.3386 15.1739 20 15.8789 20 18.599C20 21.32 16.3146 22 12 22Z"
                                fill="white" />
                        </svg>

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                            required autofocus placeholder="Usuario" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        {{-- <x-label for="password" :value="__('Password')" /> --}}
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.5227 7.39601V8.92935C19.2451 9.46696 20.5 11.0261 20.5 12.8884V17.8253C20.5 20.1308 18.5886 22 16.2322 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8253V12.8884C3.5 11.0261 4.75595 9.46696 6.47729 8.92935V7.39601C6.48745 4.41479 8.95667 2 11.9848 2C15.0535 2 17.5227 4.41479 17.5227 7.39601ZM12.0051 3.73904C14.0678 3.73904 15.7445 5.37871 15.7445 7.39601V8.7137H8.25553V7.37613C8.26569 5.36878 9.94232 3.73904 12.0051 3.73904ZM12.8891 16.4549C12.8891 16.9419 12.4928 17.3294 11.9949 17.3294C11.5072 17.3294 11.1109 16.9419 11.1109 16.4549V14.2488C11.1109 13.7718 11.5072 13.3843 11.9949 13.3843C12.4928 13.3843 12.8891 13.7718 12.8891 14.2488V16.4549Z"
                                fill="white" />
                        </svg>

                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" placeholder="Contraseña" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4 remember-me">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">Recordarme</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <x-button class="ml-3">
                            INICIAR SESIÓN
                        </x-button>
                    </div>
                </form>
            </section>
        </div>

        <footer class="footer">
            <div class="text-center">
                A.C.E. Logos y Ethos <br />
                Todos los derechos reservados © <br class="hidden-xs" />
                2020
            </div>
        </footer>

    </div>

    @yield('scripts')
</body>

</html>
