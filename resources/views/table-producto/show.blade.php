@extends('adminlte::page')

@section('title', isset($tableProducto->name) ? $tableProducto->name . ' - Table Producto' : 'Table Producto')

@section('content_header')
    <h1>Visualización de Productos</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                         <div class="card-tools">
                            <a href="{{ route('table-productos.index') }}" class="btn btn-outline-dark btn-sm">Back</a>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div> 

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $tableProducto->nombre }}
                        </div>
                        <div>
                            @if (!empty($tableProducto->imagen))
                                <img style="width: 250px;" src="{{ asset($tableProducto->imagen) }}"
                                    alt="Imagen de {{ $tableProducto->nombre }}">
                            @else
                                <p>No hay imagen disponible.</p>
                            @endif
                        </div>
                        <div class="form-group mb-2 mb20">

                            <strong>Imagen:</strong>
                            {{ $tableProducto->imagen }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Precio:</strong>
                            {{ $tableProducto->precio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripción:</strong>
                            {{ $tableProducto->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
