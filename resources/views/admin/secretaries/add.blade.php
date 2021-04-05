@extends('layouts.admin')

@section('title', 'Secretarías')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'secretarias'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Secretarías'])

    <div class="module-container">

        <h5>
            {{-- <a class="breadcrumb-link" href="{{ url('/admin/secretarias') }}">Lista de Colaboradores</a> / --}}
            Agregar Miembro de las Secretarías
        </h5>

        <a class="button view-all-button" href="{{ url('/admin/secretarias') }}">
            Ver Todo
        </a>

        <div class="form-container">
            <form method="POST" action="{{ url('/admin/secretarias/agregar') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <b>Cargo:</b>
                    <input type="text" name="position" required>
                </div>
                <div class="form-group">
                    <b>Nombre:</b>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <b>Apellidos:</b>
                    <input type="text" name="last_name" required>
                </div>
                <div class="form-group">
                    <b>Correo:</b>
                    <input type="text" name="mail" required>
                </div>
                <div class="form-group">
                    <b>Orden:</b>
                    <input type="number" name="order" required>
                </div>
                <div class="form-group">
                    <b>Foto:</b>
                    <input type="file" name="photo" required>
                </div>

                <button class="button save-button">Guardar</button>

            </form>
        </div>

    </div>

@endsection
