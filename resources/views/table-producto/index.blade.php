@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crud Productos</h1>
@stop

@section('content')
    <div class="card">
        <div class="body table-responsive-custom">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-xs-6">
                            <h2>CRUD <b>Producto</b></h2>
                        </div>
                    </div>
                </div>

                <table class="table table-striped table-hover table-custom">
                    <thead>
                        <tr>
                            <th></th>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tableProductos as $tableProducto)
                            <tr>
                                <td></td>
                                <td>{{ ++$i }}</td>
                                <td>{{ $tableProducto->nombre }}</td>
                                <td><img style="width: 100px;" src="{{ $tableProducto->imagen }}" alt=""></td>
                                <td>{{ $tableProducto->descripcion }}</td>
                                <td>Q.{{ $tableProducto->precio }}</td>
                                <td>
                                    <form action="{{ route('table-productos.destroy', $tableProducto->id) }}" 
                                        method="POST" class="delete-form">
                                        <a class="btn btn-outline-primary" 
                                        href="{{ route('table-productos.show', $tableProducto->id) }}">
                                            <i class="fa fa-fw fa-eye"></i>
                                        </a>
                                        <a class="btn btn-outline-success" 
                                        href="{{ route('table-productos.edit', $tableProducto->id) }}">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-outline-danger" 
                                        onclick="abrirModalConfirmacion({{ $tableProducto->id }})">
                                            <i class="fa fa-fw fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @isset($tableProducto)
                    <!-- Delete Modal HTML -->
                    <div id="deleteEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                
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
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                    <button type="button" class="btn btn-danger" id="confirmDeleteButton">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endisset

            </div>
        </div>
    </div>

    <script>
        let formToSubmit;

        function abrirModalConfirmacion(id) {
            // Almacena el formulario que debe enviarse después de la confirmación
            formToSubmit = document.querySelector(`form[action$="${id}"]`);
            // Abrir el modal de confirmación
            $('#deleteEmployeeModal').modal('show');
        }

        document.getElementById('confirmDeleteButton').addEventListener('click', function () {
            // Envía el formulario almacenado
            formToSubmit.submit();
        });
    </script>
@stop

@section('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/stylecrud.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
@stop
