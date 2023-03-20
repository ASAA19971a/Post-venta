@extends('layouts.master')

@section('title', 'Configuracion-Producto')

@section('content')
    @livewire('inventory::administration.product.config.config',['product_id'=>$id])
@endsection

