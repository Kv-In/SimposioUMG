@extends('adminlte::page')

@section('title', 'Agregar Organizadores o Colaboradores')

@section('content_header')
    <h1>Agregar Organizadores o Colaboradores</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Organizadores</h3>
                    
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('table-organizadores.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('table-organizadore.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
