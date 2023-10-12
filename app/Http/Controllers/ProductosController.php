<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $datos = Producto::All();
        return view('inicio', compact('datos'));
    }

    public function create()
    {
        return view('agregar');
    }

    public function store(Request $request)
    {
        $productos = new Producto();
        $productos->nombre_producto = $request->post('nombre_producto');
        $productos->descripcion = $request->post('descripcion');
        $productos->precio = $request->post('precio');
        $productos->estado = $request->post('estado');
        $productos->fecha_publicacion = $request->post('fecha_publicacion');
        $productos->save();

        return redirect()->route("productos.index")->with("success", "Agregado con exito!");
    }

    public function edit(Producto $productos)
    {
        return view('actualizar');
    }
}
