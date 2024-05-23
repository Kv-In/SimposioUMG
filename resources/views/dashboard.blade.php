@extends('adminlte::page')

@section('title', ' Dashboard ')


@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Simposio 2024</h2>
        </div>
        <div class="card-body">
            <p> Bienvenido a tu Dashboard</p>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop