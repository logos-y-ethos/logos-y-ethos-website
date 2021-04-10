@extends('layouts.admin')

@section('title', 'Usuarios')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'usuarios'])

@endsection

@section('content')

    @include('../admin/components/title-bar', ['title' => 'Usuarios'])

    <div class="module-container">

        <h5>Lista de Usuarios</h5>

        <a class="button add-button" href="{{ url('/admin/usuarios/agregar') }}">
            Agregar
            @include('../admin/components/icons/add')
        </a>

        <table class="table-items">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Permisos</th>
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
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td class="text-center">
                            <a href="#" onclick="openModalReset(this)" data-id="{{ $user->id }}">
                                @include('../admin/components/icons/password')
                            </a>
                            <a href="{{ url('/admin/usuarios/editar/' . $user->id) }}">
                                @include('../admin/components/icons/edit')
                            </a>
                            <a href="#" onclick="openModal(this)" data-id="{{ $user->id }}">
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

    <div id="delete-modal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="hideModal()">&times;</span>
                <h4>¿Deseas borrar este registro?</h4>
            </div>
            <div class="modal-body">
                <p>Usuario N° <span id="modal-span-info"></span></p>
            </div>
            <div class="modal-footer">
                <button class="button cancel-button" onclick="hideModal()">Cancelar</button>
                <button class="button delete-button" onclick="deleteItem()">Borrar</button>
            </div>
        </div>
    </div>
    <div id="reset-modal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="hideModal()">&times;</span>
                <h4>¿Restablecer la contraseña de este usuario?</h4>
            </div>
            <div class="modal-body">
                <p>Usuario N° <span id="modal-span-info-reset"></span></p>
                <p>Su nueva contraseña será: ACELE00<span id="modal-span-info-reset-p"></span></p>
            </div>
            <div class="modal-footer">
                <button class="button cancel-button" onclick="hideModalReset()">Cancelar</button>
                <button class="button edit-button" onclick="resetPassword()">Restablecer</button>
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

    function deleteItem() {
        if (idToDelete >= 0) location.assign(`{{ url('/admin/usuarios/borrar/') }}/${idToDelete}`);
    }

</script>

<script>
    let idToReset = 0;
    let modalReset = document.getElementById("reset-modal");
    let modalSpanInfoReset = document.getElementById("modal-span-info-reset");
    let modalSpanInfoResetP = document.getElementById("modal-span-info-reset-p");

    function openModalReset(element) {
        // console.log(element.getAttribute("data-id"));
        idToReset = element.getAttribute("data-id");
        modalSpanInfoReset.textContent = idToReset;
        modalSpanInfoResetP.textContent = idToReset;
        modalReset.style.display = "flex";
    }

    function hideModalReset() {
        modalReset.style.display = "none";
    }

    function resetPassword() {
        if (idToReset >= 0) location.assign(`{{ url('/admin/usuarios/reset-password/') }}/${idToReset}`);
    }

    window.onclick = function(event) {
        if (event.target == modalReset || event.target == modal) {
            modalReset.style.display = "none";
            modal.style.display = "none";
        }
    }

</script>

@endsection
