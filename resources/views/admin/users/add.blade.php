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
                <button class="button save-button">Guardar</button>

            </form>
        </div>

    </div>

@endsection
