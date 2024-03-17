<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //Metodo Index
    public function index()
    {
        return view('Productos.index');
    }


    //Metodo para crear
    public function create()
    {
        return view('Productos.crear');
    }

    public function show($producto)
    {
        return view("Productos.show", ['producto' => $producto]);
       // return view("Productos.show", compact('producto'));
    }
}
