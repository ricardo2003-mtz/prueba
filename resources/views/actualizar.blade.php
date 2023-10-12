@extends('layouts.plantillas')

@section("tituloPagina", "Agregar nueva persona")


@section('contenido')
<div class="card">
  <div class="card-header">
    <h5>ACTUALIZAR PRODUCTO</h5>
  </div>
  <div class="card-body">
    
    <p class="card-text">
        <form action="#">
            <label for="">Nombre del producto</label>
            <input type="text" name="nombre_producto" class="form-control" required>
            <label for="">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" required>
            <label for="">Precio</label>
            <input type="float" name="precio" class="form-control" required>
            <label for="">Estado</label>
            <input type="boolean" name="estado" class="form-control" required>
            <label for="">Fecha de publicacion</label>
            <input type="date" name="fecha_publicacion" class="form-control" required>
            <br>
            <a href="{{ route('productos.index')}}" class="btn btn.primary">Regresar</a>
            <button class="btn btn-warning">ACTUALIZAR</button>
        </form>
    </p>
    
  </div>
</div>
@endsection