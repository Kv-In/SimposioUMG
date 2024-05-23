@extends('adminlte::page')

@section('title', 'Agregar Expositores')

@section('content_header')
    <h1>Añadir Expositores</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Expositores</h3>
                   
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('table-expositores.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('table-expositore.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
