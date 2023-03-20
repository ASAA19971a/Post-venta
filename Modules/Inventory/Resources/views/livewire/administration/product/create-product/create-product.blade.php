<div>
    <h3>The <code>CreateProduct</code> livewire component is loaded from the <code>Inventory</code> module.</h3>
</div>


<div>
    <input type="text" wire:model="attributeName">

    <!-- Nuevo campo para descripción de atributo -->
    <textarea wire:model="attributeDescription"></textarea>

    <!-- Botón para agregar nuevo atributo -->
    <button wire:click.prevent="addAttribute">Agregar atributo</button>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attributes as $index => $attribute)
                <tr>
                    <td>
                        @if ($index !== $editIndex)
                            {{ $attribute['name'] }}
                        @else
                            <input type="text" wire:model="attributeName">
                        @endif
                    </td>
                    <td>
                        @if ($index !== $editIndex)
                            {{ $attribute['description'] }}
                        @else
                            <textarea wire:model="attributeDescription"></textarea>
                        @endif
                    </td>
                    <td>
                        @if ($index !== $editIndex)
                            <button wire:click="startEdit({{ $index }})">Editar</button>
                        @else
                            <button wire:click="saveAttribute">Guardar</button>
                            <button wire:click="stopEdit">Cancelar</button>
                        @endif
                        <button wire:click="deleteAttribute({{ $index }})">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
