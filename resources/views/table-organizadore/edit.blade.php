@extends('adminlte::page')

@section('title', 'Editar Organizadores')

@section('content_header')
    <h1 class=" text-secondary font-weight-bold p-2">Editar Organizadores</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                             <div class="card-tools">
                                <a href="{{ route('table-organizadores.index') }}" class="btn btn-outline-dark btn-sm">Back</a>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div> 
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('table-organizadores.update', $tableOrganizadore->id) }}" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            <div>
                                @if (!empty($tableOrganizadore->url))
                                    <img style="width: 100px;" src="{{ asset($tableOrganizadore->url) }}" alt="Imagen de {{ $tableOrganizadore->Nombre }}">
                                @else
                                    <p>No hay imagen disponible.</p>
                                @endif
                            </div>
                            @csrf
                            @include('table-organizadore.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
