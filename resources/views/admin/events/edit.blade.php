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
            Editar Evento N° {{ $event->id }}
        </h5>

        <a class="button view-all-button" href="{{ url('/admin/eventos') }}">
            Ver Todo
        </a>

        <div class="form-container">
            <form method="POST" action="{{ url('/admin/eventos/editar/' . $event->id) }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <b>Tipo: </b>
                    <label class="label-radio">
                        <input type="radio" name="type" value="academico" @if ($event->type === 'academico') checked @endif>
                        Académico
                    </label>
                    <label class="label-radio">
                        <input type="radio" name="type" value="financiamiento" @if ($event->type === 'financiamiento') checked @endif>
                        De financiamiento
                    </label>
                </div>
                <div class="form-group">
                    <b>Título:</b>
                    <input type="text" name="title" required value="{{ $event->title }}">
                </div>
                <div class="form-group">
                    <b>Descripción:</b>
                    <textarea name="description" rows="4" required>{{ $event->description }}</textarea>
                </div>
                <div class="form-group">
                    <b>Fecha:</b>
                    <input type="date" name="date" value="{{ $event->date }}">
                </div>
                <div class="form-group">
                    <b>Hora:</b>
                    <input type="time" name="time" value="{{ $event->time }}">
                </div>
                <div class="form-group">
                    <b>Foto:</b>
                    <img src="{{ asset('/images/events/' . $event->photo) }}" alt="" width="170">
                    <input type="file" name="photo" }>
                </div>
                <div class="form-group">
                    <b>Medio:</b>
                    <input type="text" name="medium" value="{{ $event->medium }}">
                </div>
                <div class="form-group">
                    <b>Link:</b>
                    <input type="text" name="link" value="{{ $event->link }}">
                </div>

                <button class="button save-button">Guardar</button>

            </form>
        </div>

    </div>

@endsection
