<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Expositores</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/stylecrud.css">
    <style>
        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <h1 class="text-center text-secondary font-weight-bold p-5">Expositores</h1>

    <div class="container-fluid">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-xs-6">
                            <h2>Expositores <b>Simposio</b></h2>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="{{ route('table-expositores.create') }}" class="btn btn-success" data-toggle="modal">
                                <i class="material-icons">&#xE147;</i> <span>Añadir Registro</span>
                            </a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Imagen</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Facebook</th>
                            <th>GitHub</th>
                            <th>Instagram</th>
                            <th>X</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tableExpositores as $tableExpositore)
                        <tr>
                            <td>{{++$i}}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $tableExpositore->Nombre }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $tableExpositore->Apellidos }}</td>
                            <td><img style="width: 100px;" src="{{ $tableExpositore->foto }}" alt=""></td>
                            <td class="text-truncate" style="max-width: 200px;">{{ $tableExpositore->Correo }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $tableExpositore->Telefono }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $tableExpositore->Facebook }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $tableExpositore->GitHub }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $tableExpositore->Instagram }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $tableExpositore->X }}</td>
                            <td>
                                <form action="{{ route('table-expositores.destroy', $tableExpositore->id) }}" method="POST">
                                    <a class="btn btn-outline-primary" href="{{ route('table-expositores.show', $tableExpositore->id) }}">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a class="btn btn-outline-success" href="{{ route('table-expositores.edit', $tableExpositore->id) }}">
                                        <i class="fa fa-fw fa-edit"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-outline-danger" onclick="abrirModalConfirmacion({{ $tableExpositore->id }})">
                                        <i class="fa fa-fw fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="confirmDeleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h4 class="modal-title">Eliminar Registro</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>¿Estás seguro de que deseas eliminar este registro?</p>
                        <p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function abrirModalConfirmacion(id) {
            const form = document.getElementById('confirmDeleteForm');
            form.action = `/table-expositores/${id}`;
            $('#deleteEmployeeModal').modal('show');
        }
    </script>
</body>

</html>
