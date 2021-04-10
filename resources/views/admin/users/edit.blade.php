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

                <button class="button save-button">Guardar</button>

            </form>
        </div>

    </div>

@endsection