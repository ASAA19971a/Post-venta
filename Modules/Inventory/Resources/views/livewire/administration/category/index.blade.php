@extends('layouts.master')

@section('title', 'Categoria')

@section('content')
    @livewire('inventory::administration.category.category')

@endsection
@section('js')
    <script>
        Livewire.on('openCategoryModal', () => {
            $('#categoryModal').modal('show');
        });
        Livewire.on('closeCategoryModal', () => {
            $('#categoryModal').modal('hide');
        });
    </script>
@endsection
