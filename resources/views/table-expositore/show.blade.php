@extends('adminlte::page')

@section('title', 'Visualización Expositores')

@section('content_header')
    <h1>Visualización Expositores</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    
                     <div class="card-tools">
                        <a href="{{ route('table-expositores.index') }}" class="btn btn-outline-dark btn-sm">Back</a>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div> 

                <div class="card-body bg-white">

                    <div class="form-group mb-2 mb20">
                        <strong>Nombre:</strong>
                        {{ $tableExpositore->Nombre }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Apellidos:</strong>
                        {{ $tableExpositore->Apellidos }}
                    </div>
                    <div>
                        @if (!empty($tableExpositore->foto))
                            <img style="width: 250px;" src="{{ asset($tableExpositore->foto) }}" alt="Imagen de {{ $tableExpositore->Nombre }}">
                        @else
                            <p>No hay imagen disponible.</p>
                        @endif
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Foto:</strong>
                        {{ $tableExpositore->foto }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Correo:</strong>
                        {{ $tableExpositore->Correo }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Telefono:</strong>
                        {{ $tableExpositore->Telefono }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Facebook:</strong>
                        {{ $tableExpositore->Facebook }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Github:</strong>
                        {{ $tableExpositore->GitHub }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Instagram:</strong>
                        {{ $tableExpositore->Instagram }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>X:</strong>
                        {{ $tableExpositore->X }}
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
