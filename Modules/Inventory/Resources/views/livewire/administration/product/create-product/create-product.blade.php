<div>
    <h3>Datos Generales</h3>
    <div>
        <div class="form-group">
            {!! Form::label('name', 'Nombre', []) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Descripcion', []) !!}
            {!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price', 'Precio', []) !!}
            {!! Form::text('price', null, ['class' => 'form-control']) !!}
        </div>
        @php
            // dd($categoryList);
        @endphp
        <div class="form-group">
            {!! Form::label('category', 'Categoria', []) !!}
            {!! Form::select('category', $categoryNames, null, ['class' => 'form-control']) !!}
            {{-- {!! Form::text('category', null, ['class' => 'form-control']) !!} --}}
        </div>

        <hr>
        <h3>Atributos</h3>
        <div class="row">
            <div class="col-md-5">
                {!! Form::label('attributeName', 'Nombre', []) !!}
                {!! Form::text('attributeName', null, ['class' => 'form-control', 'wire:model' => 'attributeName', 'required']) !!}
            </div>
            <div class="col-md-5">
                {!! Form::label('attributeDescription', 'Descripcion', []) !!}
                {!! Form::text('attributeDescription', null, [
                    'class' => 'form-control',
                    'wire:model' => 'attributeDescription',
                    'required',
                ]) !!}
            </div>
            <div class="col-md-2">
                <br>
                <button wire:click.prevent="addAttribute" class="btn btn-info">Agregar atributo</button>
            </div>
            <div class="col-md-12 mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attributes as $index => $attribute)
                            <tr>
                                <td>
                                    @if ($index !== $editIndex)
                                        {{ $attribute['name'] }}
                                    @else
                                        {!! Form::text('attributeName', null, ['class' => 'form-control', 'wire:model' => 'attributeName', 'required']) !!}
                                    @endif
                                </td>
                                <td>
                                    @if ($index !== $editIndex)
                                        {{ $attribute['description'] }}
                                    @else
                                        {!! Form::text('attributeDescription', null, [
                                            'class' => 'form-control',
                                            'wire:model' => 'attributeDescription',
                                            'required',
                                        ]) !!}
                                    @endif
                                </td>
                                <td>
                                    @if ($index !== $editIndex)
                                        <button wire:click="startEdit({{ $index }})"
                                            class="btn btn-primary">Editar</button>
                                    @else
                                        <button wire:click="saveAttribute" class="btn btn-success">Guardar</button>
                                        <button wire:click="stopEdit" class="btn btn-secondary">Cancelar</button>
                                    @endif

                                </td>
                                <td>
                                    <button wire:click="deleteAttribute({{ $index }})"
                                        class="btn btn-danger">Eliminar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- <input type="text" wire:model="attributeName">
        <!-- Nuevo campo para descripción de atributo -->
        <textarea wire:model="attributeDescription"></textarea> --}}
        <!-- Botón para agregar nuevo atributo -->


        <div class="d-flex justify-content-center p-2">
            <button type="button" wire:click="save" class="btn btn-success mx-3">Guardar</button>
            <a href="{{ url('inventory/products') }}" class="btn btn-secondary">Cancelar</a>

        </div>
    </div>
</div>
