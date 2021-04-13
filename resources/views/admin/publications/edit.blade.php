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
                    <input type="text" name="code" value="{{ $publication->code }}">
                </div>

                <div class="form-group">
                    <b>Título:</b>
                    <input type="text" name="title" value="{{ $publication->title }}">
                </div>

                <div class="form-group">
                    <b>Portada:</b>
                    <img src="{{ asset('/files/' . $publication->cover) }}" alt="" width="150">
                </div>
                <div class="form-group">
                    <b></b>
                    <input type="file" name="cover">
                </div>

                <div class="form-group">
                    <b>Fecha:</b>
                    <input type="date" name="date" value="{{ $publication->date }}">
                </div>

                <div class="form-group">
                    <b>Autor:</b>
                    <input type="text" name="author" value="{{ $publication->author }}">
                </div>

                <div class="form-group">
                    <b>Descripción:</b>
                    <textarea name="description" rows="5">{{ $publication->description }}</textarea>
                </div>

                <div class="form-group">
                    <b>Archivo:</b>
                    <a href="{{ asset('/files/' . $publication->file) }}" target="_blank">Ver archivo actual</a>
                </div>
                <div class="form-group">
                    <b></b>
                    <input type="file" name="file" >
                </div>

                <div class="form-group">
                    <b>N° de pág:</b>
                    <input type="number" name="number_pages" value="{{ $publication->number_pages }}">
                </div>

                <button class="button save-button">Guardar</button>

            </form>
        </div>

    </div>

@endsection
