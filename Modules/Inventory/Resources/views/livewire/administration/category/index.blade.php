@extends('layouts.template')

@section('title', 'Categoria')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
    @livewire('inventory::administration.category.category')
@stop
@section('js')
    @livewireScripts

    <script>
        Livewire.on('openCategoryModal', () => {
            $('#categoryModal').modal('show');
        });
        Livewire.on('closeCategoryModal', () => {
            $('#categoryModal').modal('hide');
        });
    </script>
@stop
