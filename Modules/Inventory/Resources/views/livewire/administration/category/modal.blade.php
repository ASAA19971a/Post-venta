<div wire.ignore.self class="modal fade" id="categoryModal" role="dialog" aria-labelledby="categoryModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModalLabel">
                    {{ $categoryId ? 'Editar categoría' : 'Crear categoría' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" wire:model.defer="name" id="name"
                            placeholder="Ingrese el nombre de la categoría">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción:</label>
                        <textarea class="form-control" wire:model.defer="description" id="description" rows="3"></textarea>
                        @error('description')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                @if ($categoryId)
                    <button type="button" wire:click="update" class="btn btn-primary">Guardar cambios</button>
                @else
                    <button type="button" wire:click="save" class="btn btn-primary">Crear categoría</button>
                @endif
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
