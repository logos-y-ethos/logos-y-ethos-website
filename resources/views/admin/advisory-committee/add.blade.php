@extends('layouts.admin')

@section('title', 'Comité Consultivo')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'comite consultivo'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Comité Consultivo'])

    <div class="module-container">

        <h5>
            {{-- <a class="breadcrumb-link" href="{{ url('/admin/comite-consultivo') }}">Lista de Colaboradores</a> / --}}
            Agregar Miembro del Comité Consultivo
        </h5>

        <a class="button view-all-button" href="{{ url('/admin/comite-consultivo') }}">
            Ver Todo
        </a>

        <div class="form-container">
            <form method="POST" action="{{ url('/admin/comite-consultivo/agregar') }}">
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
