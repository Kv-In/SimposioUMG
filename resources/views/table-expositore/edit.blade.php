@extends('adminlte::page')

@section('title', 'Editar Expositores')

@section('content_header')
    <h1>Editar Expositores</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar</h3>
                     <div class="card-tools">
                        <a href="{{ route('table-expositores.index') }}" class="btn btn-outline-dark btn-sm">Back</a>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div> 
                </div>
                <div class="card-body bg-white">
                    <form method="POST" action="{{ route('table-expositores.update', $tableExpositore->id) }}" role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        <div>
                            @if (!empty($tableExpositore->foto))
                                <img style="width: 100px;" src="{{ asset($tableExpositore->foto) }}" alt="Imagen de {{ $tableExpositore->Nombre }}">
                            @else
                                <p>No hay imagen disponible.</p>
                            @endif
                        </div>
                        @csrf

                        @include('table-expositore.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
