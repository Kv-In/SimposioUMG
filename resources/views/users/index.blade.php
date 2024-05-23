@extends('adminlte::page')

@section('title', ' Dashboard ')


@section('content_header')
    <h1>Lista Usuarios</h1>
@stop

@section('content')
    @livewire('users-index')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log("ROCK"); </script>
@stop