@extends('layouts.admin')

@section('title', 'Consejo Directivo')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'consejo directivo'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Consejo Directivo'])

    <div class="module-container">

        <h5>Lista de Miembros del Consejo Directivo</h5>

        <a class="button add-button" href="{{ url('/admin/consejo-directivo/agregar') }}">
            Agregar
            @include('../admin/components/icons/add')
        </a>

        <table class="table-items">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cargo</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Orden</th>
                    <th>Fecha Creación</th>
                    <th>Fecha Actualización</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($members as $member)
                    <tr>
                        <td>{{ $member->id }}</td>
                        <td>{{ ucfirst($member->position) }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->last_name }}</td>
                        <td>{{ $member->mail }}</td>
                        <td>{{ $member->order }}°</td>
                        <td>{{ $member->created_at }}</td>
                        <td>{{ $member->updated_at }}</td>
                        <td class="text-center">
                            <a href="{{ url('/admin/consejo-directivo/editar/' . $member->id) }}">
                                @include('../admin/components/icons/edit')
                            </a>
                            <a href="#" onclick="openModal(this)" data-id="{{ $member->id }}">
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

    <div id="delete-modal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="hideModal()">&times;</span>
                <h4>¿Deseas borrar este registro?</h4>
            </div>
            <div class="modal-body">
                <p>Miembro del Consejo Directivo N° <span id="modal-span-info"></span></p>
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
        if (idToDelete >= 0) location.assign(`{{ url('/admin/consejo-directivo/borrar/') }}/${idToDelete}`);
    }

</script>

@endsection
