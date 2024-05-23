@extends('adminlte::page')

@section('title', isset($tableOrganizadore->name)? $tableOrganizadore->name. ' - Table Organizadore' : 'Table Organizadore' )

@section('content_header')
    <h1>Visualizacion de Organizadores</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                         <div class="card-tools">
                            <a href="{{ route('table-organizadores.index') }}" class="btn btn-outline-dark btn-sm">Back</a>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div> 
                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $tableOrganizadore->Nombre }}
                        </div>
                        <div>
                            @if (!empty($tableOrganizadore->url))
                                <img style="width: 250px;" src="{{ asset($tableOrganizadore->url) }}"
                                    alt="Imagen de {{ $tableOrganizadore->Nombre }}">
                            @else
                                <p>No hay imagen disponible.</p>
                            @endif
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Url:</strong>
                            {{ $tableOrganizadore->url }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Lider:</strong>
                            {{ $tableOrganizadore->Lider }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Equipo:</strong>
                            {{ $tableOrganizadore->Equipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
