@extends('layouts.admin')

@section('title', 'Usuarios')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'usuarios'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Usuarios'])

    <div class="module-container">

        <h5>
            {{-- <a class="breadcrumb-link" href="{{ url('/admin/usuarios') }}">Lista de Usuarios</a> / --}}
            Agregar Usuario
        </h5>

        <a class="button view-all-button" href="{{ url('/admin/usuarios') }}">
            Ver Todo
        </a>


        @if ($errors->any())
            <div>

                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-container">
            <form method="POST" action="{{ url('/admin/usuarios/agregar') }}">
                @csrf

                <div class="form-group">
                    <b>Nombre:</b>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <b>Email:</b>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <b>Contraseña:</b>
                    <input type="password" name="password" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <b>Permisos:</b>
                    <div>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Publicaciones">
                                Publicaciones
                            </label>
                        </p>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Secretarías">
                                Secretarías
                            </label>
                        </p>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Consejo Directivo">
                                Consejo Directivo
                            </label>
                        </p>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Miembros Activos">
                                Miembros Activos
                            </label>
                        </p>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Colaboradores">
                                Colaboradores
                            </label>
                        </p>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Comité Consultivo">
                                Comité Consultivo
                            </label>
                        </p>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Eventos">
                                Eventos
                            </label>
                        </p>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Usuarios">
                                Usuarios
                            </label>
                        </p>
                    </div>
                </div>
                <input type="text" id="role" name="role" hidden>

                <button class="button save-button">Guardar</button>

            </form>
        </div>

    </div>

@endsection

@section('scripts')

    <script>
        function updateRoleInput() {
            var boxes = document.getElementsByClassName('checkbox');
            var checked = [];
            for (var i = 0; boxes[i]; ++i) {
                if (boxes[i].checked) {
                    checked.push(boxes[i].getAttribute("data-value"));
                }
            }

            var checkedStr = checked.join();
            document.getElementById('role').value = checkedStr;
        }
    </script>

@endsection
