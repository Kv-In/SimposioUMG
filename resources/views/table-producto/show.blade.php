<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tableProducto->name ?? __('Show') . " " . __('Table Producto') }}</title>
    <!-- Incluir los estilos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="float-left">
                        <span class="card-title">{{ __('Show') }} Table Producto</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('table-productos.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>

                <div class="card-body bg-white">
                    
                    <div class="form-group mb-2 mb20">
                        <strong>Nombre:</strong>
                        {{ $tableProducto->nombre }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Imagen:</strong>
                        {{ $tableProducto->imagen }}
                    </div>
                    <div class="form-group mb-2 mb20">
                        <strong>Descripcion:</strong>
                        {{ $tableProducto->descripcion }}
                    </div>

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
