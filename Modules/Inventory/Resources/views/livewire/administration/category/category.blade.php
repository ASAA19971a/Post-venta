<div class="div">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <button wire:click="openCategoryModal()" class="btn btn-success">Crear categoría</button>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descrición</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <button wire:click="openCategoryModal('{{ $item->id }}')"
                            class="btn btn-primary">Editar</button>
                    </td>
                    <td>
                        <button wire:click="delete('{{ $item->id }}')" class="btn btn-danger">Eliminar</button>

                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    @include('inventory::livewire.administration.category.modal')
</div>
