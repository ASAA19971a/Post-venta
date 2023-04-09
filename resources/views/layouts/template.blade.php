@extends('adminlte::page')

@section('title', 'Dashboard')


@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    @livewireStyles
@stop

@section('js')
    @livewireScripts
@stop
