@extends('layouts.admin')

@section('title', 'Usuarios')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'usuarios'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Usuarios'])

    <div class="module-container">

        <h5>
            {{-- <a class="breadcrumb-link" href="{{ url('/admin/usuarios') }}">Lista de usuarios</a> / --}}
            Editar Colaborador N° {{ $user->id }}
        </h5>

        <a class="button view-all-button" href="{{ url('/admin/usuarios') }}">
            Ver Todo
        </a>

        <div class="form-container">
            <form method="POST" action="{{ url('/admin/usuarios/editar/' . $user->id) }}">
                @csrf

                <div class="form-group">
                    <b>Nombre:</b>
                    <input type="text" name="name" required value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <b>Email:</b>
                    <input type="email" name="email" required value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <b>Permisos:</b>
                    <div>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Publicaciones" @if (str_contains($user->role, "Publicaciones")) checked @endif>
                                Publicaciones
                            </label>
                        </p>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Secretarías" @if (str_contains($user->role, "Secretarías")) checked @endif>
                                Secretarías
                            </label>
                        </p>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Consejo Directivo" @if (str_contains($user->role, "Consejo Directivo")) checked @endif>
                                Consejo Directivo
                            </label>
                        </p>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Miembros Activos" @if (str_contains($user->role, "Miembros Activos")) checked @endif>
                                Miembros Activos
                            </label>
                        </p>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Colaboradores" @if (str_contains($user->role, "Colaboradores")) checked @endif>
                                Colaboradores
                            </label>
                        </p>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Comité Consultivo" @if (str_contains($user->role, "Comité Consultivo")) checked @endif>
                                Comité Consultivo
                            </label>
                        </p>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Eventos" @if (str_contains($user->role, "Eventos")) checked @endif>
                                Eventos
                            </label>
                        </p>
                        <p>
                            <label class="label-radio" onclick="updateRoleInput()">
                                <input class="checkbox" type="checkbox" data-value="Usuarios" @if (str_contains($user->role, "Usuarios")) checked @endif>
                                Usuarios
                            </label>
                        </p>
                    </div>
                </div>
                <input type="text" id="role" name="role" value={{ $user->role }} hidden>


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