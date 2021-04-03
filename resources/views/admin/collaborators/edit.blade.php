@extends('layouts.admin')

@section('title', 'Colaboradores')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'colaboradores'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Colaboradores'])

    <div class="module-container">

        <h5>
            {{-- <a class="breadcrumb-link" href="{{ url('/admin/colaboradores') }}">Lista de Colaboradores</a> / --}}
            Editar Colaborador N° {{ $collaborator->id }}
        </h5>

        <a class="button view-all-button" href="{{ url('/admin/colaboradores') }}">
            Ver Todo
        </a>

        <div class="form-container">
            <form method="POST" action="{{ url('/admin/colaboradores/editar/' . $collaborator->id) }}">
                @csrf

                <div class="form-group">
                    <b>Nombre:</b>
                    <input type="text" id="name" name="name" required value={{ $collaborator->name }}>
                </div>

                <div class="form-group">
                    <b>Apellidos:</b>
                    <input type="text" id="last_name" name="last_name" required value={{ $collaborator->last_name }}>
                </div>

                <button class="button save-button">Guardar</button>

            </form>
        </div>

    </div>

@endsection
