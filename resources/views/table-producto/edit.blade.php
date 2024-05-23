@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                         <div class="card-tools">
                            <a href="{{ route('table-productos.index') }}" class="btn btn-outline-dark btn-sm">Back</a>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div> 
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('table-productos.update', $tableProducto->id) }}" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                @if (!empty($tableProducto->imagen))
                                    <img style="width: 100px;" src="{{ asset($tableProducto->imagen) }}" alt="Imagen de {{ $tableProducto->nombre }}">
                                @else
                                    <p>No hay imagen disponible.</p>
                                @endif
                            </div>
                            @include('table-producto.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    {{-- Agrega aquí estilos adicionales si es necesario --}}
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
@stop
