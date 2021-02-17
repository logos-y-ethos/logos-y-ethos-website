@extends('layouts.admin')

@section('title', 'Publicaciones')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'publicaciones'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Publicaciones'])

    <div class="module-container">

        <h5>Lista de Publicaciones</h5>

        <a class="button add-button" href="#">
            Agregar
            @include('../admin/components/icons/add')
        </a>

        <table class="table-items">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Título</th>
                    {{-- <th>Portada</th> --}}
                    <th>Fecha</th>
                    <th>Autor</th>
                    {{-- <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Ruta de Archivo</th>
                    <th>Ruta de URL</th>
                    <th>N° Páginas</th> --}}
                    <th>Fecha Creación</th>
                    <th>Fecha Actualización</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($publications as $publication)
                    <tr>
                        <td>{{ $publication->id }}</td>
                        <td>{{ $publication->code }}</td>
                        <td>{{ $publication->title }}</td>
                        {{-- <td>{{ $publication->cover }}</td> --}}
                        <td>{{ $publication->date }}</td>
                        <td>{{ $publication->author }}</td>
                        {{-- <td>{{ $publication->description }}</td>
                        <td>{{ $publication->type }}</td>
                        <td>{{ $publication->file }}</td>
                        <td>{{ $publication->url }}</td>
                        <td>{{ $publication->number_pages }}</td> --}}
                        <td>{{ $publication->created_at }}</td>
                        <td>{{ $publication->updated_at }}</td>
                        <td class="text-center">
                            <a href="#">
                                @include('../admin/components/icons/view')
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
                        <td class="text-center" colspan="8">No hay datos</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>

@endsection
