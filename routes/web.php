<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;


route::get('/',[ProductosController::class, 'index'])->name('productos.index');
route::get('/create',[ProductosController::class, 'create'])->name('productos.create');
route::post('/store',[ProductosController::class, 'store'])->name('productos.store');
route::get('/edit',[ProductosController::class, 'edit'])->name('productos.edit');