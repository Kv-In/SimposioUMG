@extends('adminlte::page')

@section('title', 'Añadir Productos')

@section('content_header')
    <h1>Añadir Productos</h1>
@stop

@section('content')
   

    <section class=" content container-fluid">
        <div class="body row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Productos') }}</span>
                        <div class="float-right">
                            
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('table-productos.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('table-producto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <!-- Incluir los estilos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@stop

@section('js')
    <!-- Incluir el script JavaScript de jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Incluir los scripts JavaScript de Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
@stop
