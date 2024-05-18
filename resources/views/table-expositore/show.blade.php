<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $tableExpositore->name ?? __('') . " " . __('Table Expositore') }}</title>
    <!-- Incluir los estilos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center text-secondary font-weight-bold p-5"> Visualizacion Expositore</h1>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"
                        style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Visualizacion') }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-outline-dark btn-sm" href="{{ route('table-expositores.index') }}">
                                {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $tableExpositore->Nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Apellidos:</strong>
                            {{ $tableExpositore->Apellidos }}
                        </div>
                        <div>
                            @if (!empty($tableExpositore->foto))
                                <img style="width: 250px;" src="{{ asset($tableExpositore->foto) }}"
                                    alt="Imagen de  {{ $tableExpositore->Nombre }}">
                            @else
                                <p>No hay imagen disponible.</p>
                            @endif
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Foto:</strong>
                            {{ $tableExpositore->foto }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Correo:</strong>
                            {{ $tableExpositore->Correo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Telefono:</strong>
                            {{ $tableExpositore->Telefono }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Facebook:</strong>
                            {{ $tableExpositore->Facebook }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Github:</strong>
                            {{ $tableExpositore->GitHub }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Instagram:</strong>
                            {{ $tableExpositore->Instagram }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>X:</strong>
                            {{ $tableExpositore->X }}
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
