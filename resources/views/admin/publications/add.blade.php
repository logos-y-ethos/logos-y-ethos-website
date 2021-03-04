@extends('layouts.admin')

@section('title', 'Colaboradores')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'publicaciones'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Publicaciones'])

    <div class="module-container">

        <h5>
            Agregar Publicación
        </h5>

        <a class="button view-all-button" href="{{ url('/admin/publicaciones') }}">
            Ver Todo
        </a>

        <div class="form-container">
            <form method="POST" action="{{ url('/admin/publicaciones/agregar') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <b>Código:</b>
                    <input type="text" name="code">
                </div>

                <div class="form-group">
                    <b>Título:</b>
                    <input type="text" name="title">
                </div>

                <div class="form-group">
                    <b>Portada:</b>
                    <input type="file" name="cover">
                </div>

                <div class="form-group">
                    <b>Fecha:</b>
                    <input type="date" name="date">
                </div>

                <div class="form-group">
                    <b>Autor:</b>
                    <input type="text" name="author">
                </div>

                <div class="form-group">
                    <b>Descripción:</b>
                    <textarea name="description" rows="4"></textarea>
                </div>

                <div class="form-group hidden">
                    <b>Tipo (archivo): </b>
                    <label class="label-radio">
                        <input type="radio" name="type" value="local">
                        Local
                    </label>
                    <label class="label-radio">
                        <input type="radio" name="type" value="externo">
                        Externo
                    </label>
                </div>

                <div class="form-group">
                    <b>Archivo:</b>
                    <input type="file" name="file">
                </div>

                <div class="form-group">
                    <b>N° de páginas:</b>
                    <input type="number" name="number_pages">
                </div>

                <button class="button save-button">Guardar</button>

            </form>
        </div>

    </div>

@endsection
