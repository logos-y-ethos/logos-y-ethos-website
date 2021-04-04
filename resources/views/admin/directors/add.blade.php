@extends('layouts.admin')

@section('title', 'Consejo Directivo')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'consejo directivo'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Consejo Directivo'])

    <div class="module-container">

        <h5>
            {{-- <a class="breadcrumb-link" href="{{ url('/admin/consejo-directivo') }}">Lista de Colaboradores</a> / --}}
            Agregar Miembro del Consejo Directivo
        </h5>

        <a class="button view-all-button" href="{{ url('/admin/consejo-directivo') }}">
            Ver Todo
        </a>

        <div class="form-container">
            <form method="POST" action="{{ url('/admin/consejo-directivo/agregar') }}">
                @csrf

                <div class="form-group">
                    <b>Cargo:</b>
                    <input type="text" id="position" name="position" required>
                </div>
                <div class="form-group">
                    <b>Nombre:</b>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <b>Apellidos:</b>
                    <input type="text" id="last_name" name="last_name" required>
                </div>
                <div class="form-group">
                    <b>Correo:</b>
                    <input type="text" id="mail" name="mail" required>
                </div>
                <div class="form-group">
                    <b>Orden:</b>
                    <input type="number" id="order" name="order">
                </div>

                <button class="button save-button">Guardar</button>

            </form>
        </div>

    </div>

@endsection
