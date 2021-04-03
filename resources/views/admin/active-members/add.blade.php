@extends('layouts.admin')

@section('title', 'Miembros Activos')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'miembros activos'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Miembros Activos'])

    <div class="module-container">

        <h5>
            {{-- <a class="breadcrumb-link" href="{{ url('/admin/colaboradores') }}">Lista de Colaboradores</a> / --}}
            Agregar Colaborador
        </h5>

        <a class="button view-all-button" href="{{ url('/admin/colaboradores') }}">
            Ver Todo
        </a>

        <div class="form-container">
            <form method="POST" action="{{ url('/admin/colaboradores/agregar') }}">
                @csrf

                <div class="form-group">
                    <b>Nombre:</b>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <b>Apellidos:</b>
                    <input type="text" id="last_name" name="last_name" required>
                </div>

                <button class="button save-button">Guardar</button>

            </form>
        </div>

    </div>

@endsection
