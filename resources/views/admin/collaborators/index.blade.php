@extends('layouts.admin')

@section('title', 'Colaboradores')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'colaboradores'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Colaboradores'])

    <div class="module-container">

        <h5>Lista de Colaboradores</h5>

        <a class="button add-button" href="{{ url('/admin/colaboradores/agregar') }}">
            Agregar
            @include('../admin/components/icons/add')
        </a>

        <table class="table-items">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Tipo</th>
                    <th>Fecha Creación</th>
                    <th>Fecha Actualización</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($collaborators as $collaborator)
                    <tr>
                        <td>{{ $collaborator->id }}</td>
                        <td>{{ $collaborator->name }}</td>
                        <td>{{ $collaborator->last_name }}</td>
                        <td>{{ ucfirst($collaborator->type) }}</td>
                        <td>{{ $collaborator->created_at }}</td>
                        <td>{{ $collaborator->updated_at }}</td>
                        <td class="text-center">
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
                        <td class="text-center" colspan="7">No hay datos</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>

@endsection
