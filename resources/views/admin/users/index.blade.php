@extends('layouts.admin')

@section('title', 'Colaboradores')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'usuarios'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Publicaciones'])

    <div class="module-container">

        <h5>Lista de Usuarios</h5>

        <a class="add-button" href="#">
            Agregar
            @include('../admin/components/icons/add')
        </a>

        <table class="table-items">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Fecha Creación</th>
                    <th>Fecha Actualización</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td class="text-center">
                            <a href="#">
                                @include('../admin/components/icons/password')
                            </a>
                            <a href="#">
                                @include('../admin/components/icons/edit')
                            </a>
                            <a href="#">
                                @include('../admin/components/icons/remove')
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="6">No hay datos</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>

@endsection
