@extends('layouts.template')

@section('title', 'Producto')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
    @livewire('inventory::administration.product.product')
@stop
{{-- @section('content')
    @livewire('inventory::administration.product.product')
@endsection --}}
