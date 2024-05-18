<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Organizadores</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/stylecrud.css">


</head>

<body>
<h1 class="text-center text-secondary font-weight-bold p-5">Actualizar Organizadores</h1>

<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-6">
                        <h2>Organizadores <b>Simposio</b></h2>
                    </div>

                    <div class="col-xs-6">
                        <a href="{{ route('table-organizadores.create') }}" class="btn btn-success" data-toggle="modal"><i
                                class="material-icons">&#xE147;</i> <span>Añadir Registro</span></a>

                    </div>
                   

                </div>
            </div>


            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                    <th>id</th>
                    <th >Nombre</th>
                    <th >Imagen</th>
                    <th >Lider</th>
                    <th >Equipo</th>
                    <th>Opciones</th>
                    </tr>
                </thead>


                <tbody>
                @foreach ($tableOrganizadores as $tableOrganizadore)
                    <tr>
                        
                        <td>
                            {{++$i}}
                        </td>

                        <td>
                            {{ $tableOrganizadore->Nombre }}
                        </td>

                        <td>

                            <img style="width: 100px;" src="{{ $tableOrganizadore->url }}" alt="">
                        </td>

                        <td>
                            {{ $tableOrganizadore->Lider }}
                        </td>

                        <td>
                            {{ $tableOrganizadore->Equipo }}
                        </td>

                        <td>


                            <form action="{{ route('table-organizadores.destroy', $tableOrganizadore->id) }}"
                                  method="POST">

                                <a class="btn btn-outline-primary "
                                   href="{{ route('table-organizadores.show', $tableOrganizadore->id) }}"><i
                                        class="fa fa-fw fa-eye"></i> {{ __('') }}</a>

                                <a class="btn btn-outline-success"
                                   href="{{ route('table-organizadores.edit', $tableOrganizadore->id) }}"><i
                                        class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
                            </form>
                            <button type="submit" class="btn btn-outline-danger"
                                    onclick="abrirModalConfirmacion()">
                                <i class="fa fa-fw fa-trash"></i> {{ __('') }}
                            </button>
                        </td>


                    </tr>

                    </tr>
                @endforeach
                </tbody>


                @isset($tableOrganizadore)
                    <!-- Delete Modal HTML -->
                    <div id="deleteEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <form id="confirmDeleteForm"
                                      action="{{ route('table-organizadores.destroy', $tableOrganizadore->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-header">
                                        <h4 class="modal-title">Eliminar Registro</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Estás seguro de que deseas eliminar este registro?</p>
                                        <p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal"
                                               value="Cancelar">
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </div>
                                </
                                >
                            </div>

                        </div>
                    </div>

                @endisset
                <script>
                    function abrirModalConfirmacion() {
                        // Abrir el modal de confirmación
                        $('#deleteEmployeeModal').modal('show');
                    }
                </script>

</body>

</html>
