@extends('layouts.admin')

@section('title', 'Condfiguración')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'configuracion'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Configuración'])

    <div class="module-container">

        <h4>Cambiar contraseña</h4>

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
            <form method="POST" action="{{ url('/admin/usuarios/cambiar-mi-password') }}">
                @csrf

                <div class="form-group">
                    <b>Nueva contraseña:</b>
                    <input type="password" name="password" required autocomplete="new-password">
                </div>
                <button class="button save-button">Guardar</button>

            </form>
        </div>

    </div>

@endsection
