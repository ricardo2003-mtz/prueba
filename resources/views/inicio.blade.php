@extends('layouts/plantillas')

@section('tituloPagina','Prueba')

@section('contenido')
    <div class="card">
        <h5 class="card-header text-center ">LISTADO DE PRODUCTOS.</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{$mensaje}}
                    </div>
                    @endif
                </div>
            </div>
            <p>
                <a href="{{ route ('productos.create')}}" class="btn btn-primary">agregar nuevo</a>
            </p>
            <hr>
            <p class="card-text">
                <div class="table table-responsive">
                    <table class="table table-sm table-bordered ">
                        <thead>
                            <th>Id producto</th>
                            <th>Nombre del producto</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Estado</th>
                            <th>Fecha_publicacion</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>
                            @foreach ($datos as $item)
                            <tr>
                                <td>{{ $item->id_producto}}</td>
                                <td>{{ $item->nombre_producto}}</td>
                                <td>{{ $item->descripcion}}</td>
                                <td>{{ $item->precio}}</td>
                                <td>{{ $item->estado}}</td>
                                <td>{{ $item->fecha_publicacion}}</td>
                                <td>
                                <form action="">
                                    <button class="btn btn-warning btn-sm">
                                    <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="">
                                    <button class="btn btn-danger btn-sm">
                                    <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </p>
        </div>
    </div>
@endsection