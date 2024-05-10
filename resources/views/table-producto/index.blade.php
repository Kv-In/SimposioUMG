<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Producto</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/stylecrud.css">

    
</head>

<body>
    <h1 class="text-center text-secondary font-weight-bold p-5">Actualizar Productos</h1>

    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-xs-6">
                            <h2>Productos <b>Simposio</b></h2>
                        </div>

                        <div class="col-xs-6">
                            <a href="{{ route('table-productos.create') }}" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Añadir Registro</span></a>
                            
                        </div>

                    </div>
                </div>


                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                
                            </th>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>imagen</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Opciones </th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($tableProductos as $tableProducto)
                        <tr>
                           
                                <td></td>
                                <td>
                                    {{++$i}}
                                </td>

                                <td>
                                    {{ $tableProducto->nombre }}
                                </td>

                                <td>
                                    
                                   <img style="width: 100px;" src="{{ $tableProducto->imagen }}" alt="">
                                </td>

                                <td>
                                    {{ $tableProducto->descripcion }}
                                </td>

                                <td>
                                    Q.{{ $tableProducto->precio }}
                                </td>
                              
                                <td>


                                    <form action="{{ route('table-productos.destroy', $tableProducto->id) }}"
                                        method="POST">
                                        <a class="btn btn-outline-primary "
                                            href="{{ route('table-productos.show', $tableProducto->id) }}"><i
                                                class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                                        <a class="btn btn-outline-success"
                                            href="{{ route('table-productos.edit', $tableProducto->id) }}"><i
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


                    <!-- Delete Modal HTML -->
                    <div id="deleteEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                
                                <form id="confirmDeleteForm"                            
                                action="{{ route('table-productos.destroy', $tableProducto->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-header">
                                        <h4 class="modal-title">Eliminar Registro</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
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
                                </>
                            </div>
                            
                        </div>
                    </div>

                    <script>
                        function abrirModalConfirmacion() {
                            // Abrir el modal de confirmación
                            $('#deleteEmployeeModal').modal('show');
                        }
                    </script>

</body>

</html>