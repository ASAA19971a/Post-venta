<div>
    <h3>Filtrar tabla por fecha</h3>

    <form wire:submit.prevent="filter" method="POST">
        <div class="row">
            <div class="col-md-3">
                {!! Form::label('start_date', 'Fecha de Incio') !!}
                {!! Form::date('start_date', null, ['class' => 'form-control', 'wire:model' => 'start_date']) !!}
            </div>
            <div class="col-md-3">

                {!! Form::label('end_date', 'Fecha de Fin') !!}
                {!! Form::date('end_date', null, ['class' => 'form-control', 'wire:model' => 'end_date']) !!}
            </div>
            <div class="col-md-3">
                {!! Form::submit('Filtrar', ['class' => 'btn btn-primary mt-3']) !!}
            </div>
        </div>
    </form>

    <hr>

    @if ($data)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descrición</th>
                    <th>Configuración</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td><a href="{{ url('inventory/products/config/' . $item->_id) }}">Config</a></td>
                        <td><a href="{{ url('inventory/products/config/' . $item->_id) }}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        {{-- <p>No se encontraron resultados</p> --}}
    @endif
</div>
