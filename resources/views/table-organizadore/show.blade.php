<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $tableOrganizadore->name ?? __('Show') . ' ' . __('Table Organizadore') }}</title>
    <!-- Incluir los estilos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center text-secondary font-weight-bold p-5"> Visualizacion Organizadores y Colavoradores</h1>

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
                            <a class="btn btn-outline-dark btn-sm" href="{{ route('table-organizadores.index') }}">
                                {{ __('Back') }}</a>
                        </div>
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

    <!-- Incluir el script JavaScript de jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Incluir los scripts JavaScript de Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
