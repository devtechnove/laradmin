<!-- Edit User Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Edición de Role</h1>
                    <p> <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <div class="alert-body">
                            No se admiten campos vacíos, todos campos son requeridos
                        </div>
                        
                    </div></p>
                </div>
                <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false" autocomplete="off">
                    <input type="hidden" wire:model="selected_id">
                    <input type="hidden" wire:model="selected_id">
                     <div class="col-12 col-md-12">
                        <label for="name">Descripción</label>
                        <input wire:model="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>


                    <div class="col-12 text-center mt-2 pt-50">
                       <button type="button" wire:click.prevent="update()" class="btn btn-primary close-modal me-1" data-bs-dismiss="modal">Guardar</button>
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                            Cancelar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
