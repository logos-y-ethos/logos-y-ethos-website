@extends('layouts.admin')

@section('title', 'Publicaciones')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'publicaciones'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Publicaciones'])

    <div class="module-container">

        <h5>Lista de Publicaciones</h5>

        <a class="button add-button" href="{{ url('/admin/publicaciones/agregar') }}">
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
                            <a href="#" onclick="openModal(this)" data-id="{{ $publication->id }}">
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

    <div id="delete-modal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="hideModal()">&times;</span>
                <h4>¿Deseas borrar este registro?</h4>
            </div>
            <div class="modal-body">
                <p>Colaborador N° <span id="modal-span-info"></span></p>
            </div>
            <div class="modal-footer">
                <button class="button cancel-button" onclick="hideModal()">Cancelar</button>
                <button class="button delete-button" onclick="deleteItem()">Borrar</button>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

<script>
    let idToDelete = 0;
    let modal = document.getElementById("delete-modal");
    let modalSpanInfo = document.getElementById("modal-span-info");

    function openModal(element) {
        // console.log(element.getAttribute("data-id"));
        idToDelete = element.getAttribute("data-id");
        modalSpanInfo.textContent = idToDelete;
        modal.style.display = "flex";
    }

    function hideModal() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    function deleteItem() {
        if (idToDelete >= 0) location.assign(`{{ url('/admin/publicaciones/borrar/') }}/${idToDelete}`);
    }

</script>

@endsection