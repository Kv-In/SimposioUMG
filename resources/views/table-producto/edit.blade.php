<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('') }} Table Producto</title>
    <!-- Incluir los estilos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <h1 class="text-center text-secondary font-weight-bold p-5"> Editar Productos</h1>

<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Editar') }}</span>
                    <div class="float-right">
                        <a class="btn btn-outline-dark btn-sm" href="{{ route('table-productos.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>
                <div class="card-body bg-white">
                    <form method="POST" action="{{ route('table-productos.update', $tableProducto->id) }}"  role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        <div>
                            @if (!empty($tableProducto->imagen))
                                <img style="width: 100px;" src="{{ asset($tableProducto->imagen) }}"
                                    alt="Imagen de {{ $tableProducto->nombre }}">
                            @else
                                <p>No hay imagen disponible.</p>
                            @endif
                        </div>
                        @csrf

                        @include('table-producto.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Incluir el script JavaScript de jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Incluir los scripts JavaScript de Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
