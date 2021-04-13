@extends('layouts.admin')

@section('title', 'Eventos')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'eventos'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Eventos'])

    <div class="module-container">

        <h5>
            {{-- <a class="breadcrumb-link" href="{{ url('/admin/eventos') }}">Lista de Eventos</a> / --}}
            Agregar Evento
        </h5>

        <a class="button view-all-button" href="{{ url('/admin/eventos') }}">
            Ver Todo
        </a>

        <div class="form-container">
            <form method="POST" action="{{ url('/admin/eventos/agregar') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <b>Tipo: </b>
                    <label class="label-radio">
                        <input type="radio" name="type" value="academico">
                        Académico
                    </label>
                    <label class="label-radio">
                        <input type="radio" name="type" value="financiamiento">
                        De financiamiento
                    </label>
                </div>

                <div class="form-group">
                    <b>Título:</b>
                    <input type="text" name="title" required>
                </div>
                <div class="form-group">
                    <b>Descripción:</b>
                    <textarea  name="description" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <b>Fecha:</b>
                    <input type="date" name="date">
                </div>
                <div class="form-group">
                    <b>Hora:</b>
                    <input type="time" name="time">
                </div>
                <div class="form-group">
                    <b>Foto:</b>
                    <input type="file" name="photo">
                </div>
                <div class="form-group">
                    <b>Medio:</b>
                    <input type="text" name="medium">
                </div>
                <div class="form-group">
                    <b>Link:</b>
                    <input type="text" name="link">
                </div>

                <button class="button save-button">Guardar</button>

            </form>
        </div>

    </div>

@endsection
