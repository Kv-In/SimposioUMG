@extends('layouts.Principal')




@section('cont1')
    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
        <a class="product-item" href="{{ url('/Carito') }}">
            @foreach ($tableProductosCont1 as $tableProducto)
                <img src="{{ $tableProducto->imagen }}" class="img-fluid product-thumbnail">
                <h3 class="product-title">{{ $tableProducto->nombre }}</h3>
                <p class="product-description">{{ $tableProducto->descripcion }}</p>
                <strong class="product-price">Q.{{ $tableProducto->precio }}</strong>
                <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid">
                </span>
            @endforeach
        </a>
    </div>
@endsection

@section('cont2')
    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
        <a class="product-item" href="{{ url('/Carito') }}">
            @foreach ($tableProductosCont2 as $tableProducto)
                <img src="{{ $tableProducto->imagen }}" class="img-fluid product-thumbnail">
                <h3 class="product-title">{{ $tableProducto->nombre }}</h3>
                <p class="product-description">{{ $tableProducto->descripcion }}</p>
                <strong class="product-price">Q.{{ $tableProducto->precio }}</strong>
                <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid">
                </span>
            @endforeach
        </a>
    </div>
@endsection

@section('cont3')
    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
        <a class="product-item" href="{{ url('/Carito') }}">
            @foreach ($tableProductosCont3 as $tableProducto)
                <img src="{{ $tableProducto->imagen }}" class="img-fluid product-thumbnail">
                <h3 class="product-title">{{ $tableProducto->nombre }}</h3>
                <p class="product-description">{{ $tableProducto->descripcion }}</p>
                <strong class="product-price">Q.{{ $tableProducto->precio }}</strong>
                <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid">
                </span>
            @endforeach
        </a>
    </div>
@endsection


@section('contEx1') 

<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
    <div class="product-item-sm d-flex">
        @foreach ($tableExpositoresCont1 as $tableProducto)
        <div class="thumbnail">
            <img src="{{ $tableExpositore->foto }}" alt="Image" class="img-fluid">
        </div>
        <div class="pt-3">
            <h3>{{ $tableExpositore->Nombre }}</h3>
            <p>{{ $tableExpositore->X }}</p>
            <p><a href="#">Read More</a></p>
        </div>
        @endforeach
    </div>
</div>

@endsection