@extends('layouts.Principal')




@section('cont1')
    @foreach ($tableProductos as $tableProducto)
        <img src="{{ $tableProducto->imagen }}" class="img-fluid product-thumbnail">
        <h3 class="product-title">{{ $tableProducto->nombre }}</h3>
        <p class="product-description">{{ $tableProducto->descripcion }}</p>
        <strong class="product-price">Q.{{ $tableProducto->precio }}</strong>
        <span class="icon-cross">
            <img src="images/cross.svg" class="img-fluid">
        </span>
    @endforeach
@endsection



