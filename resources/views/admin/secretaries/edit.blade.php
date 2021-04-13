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
            Editar Miembro de las Secretarías N° {{ $member->id }}
        </h5>

        <a class="button view-all-button" href="{{ url('/admin/secretarias') }}">
            Ver Todo
        </a>

        <div class="form-container">
            <form method="POST" action="{{ url('/admin/secretarias/editar/' . $member->id) }}"
                enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <b>Cargo:</b>
                    <input type="text" name="position" required value="{{ $member->position }}">
                </div>
                <div class="form-group">
                    <b>Nombre:</b>
                    <input type="text" name="name" required value="{{ $member->name }}">
                </div>
                <div class="form-group">
                    <b>Apellidos:</b>
                    <input type="text" name="last_name" required value="{{ $member->last_name }}">
                </div>
                <div class="form-group">
                    <b>Correo:</b>
                    <input type="email" name="mail" required value="{{ $member->mail }}">
                </div>
                <div class="form-group">
                    <b>Orden:</b>
                    <input type="number" name="order" required value="{{ $member->order }}">
                </div>
                <div class="form-group">
                    <b>Foto:</b>
                    <img src="{{ asset('/images/us/' . $member->photo) }}" alt="" width="150">
                </div>
                <div class="form-group">
                    <b></b>
                    <input type="file" name="photo" required}>
                </div>
                <div class="form-group">
                    <b>Secretaría:</b>
                    <select name="secretary_id">
                        @foreach ($secretaries as $secretary)
                            <option value="{{ $secretary->id }}" @if ($member->secretary_id === $secretary->id) selected @endif>
                                {{ $secretary->title }}</option>
                        @endforeach
                    </select>
                </div>

                <button class="button save-button">Guardar</button>

            </form>
        </div>

    </div>

@endsection
