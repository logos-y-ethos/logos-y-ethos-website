@extends('layouts.admin')

@section('title', 'Colaboradores')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'publicaciones'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Publicaciones'])

    <div class="module-container">

        <h5>
            Agregar Colaborador
        </h5>

        <a class="button view-all-button" href="{{ url('/admin/publicaciones') }}">
            Ver Todo
        </a>

        <div class="form-container">
            <form method="POST" action="{{ url('/') }}">
                @csrf

                <div class="form-group">
                    <b>Code:</b>
                    <input type="text" id="name" name="code">
                </div>

                <div class="form-group">
                    <b>Apellidos:</b>
                    <input type="text" id="last_name" name="last_name">
                </div>

                <div class="form-group">
                    <b>Tipo: </b>
                    <label class="label-radio">
                        <input type="radio" name="type" value="estudiante">
                        Estudiante
                    </label>
                    <label class="label-radio">
                        <input type="radio" name="type" value="egresado">
                        Egresado
                    </label>
                </div>

                <button class="button save-button">Guardar</button>

            </form>
        </div>

    </div>

@endsection
