<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //Metodo Index
    public function index()
    {
        $producto = Producto::all();
        $producto = Producto::paginate(); //para ver el contenido por paginas
        return view('Productos.index', ['producto' => $producto]);
    }
    //Metodo para crear
    public function create()
    {
        return view('Productos.crear');
    }
    //Metodo para mostrar
    public function show($producto)
    {
        $producto = Producto::find($producto);
        return view("Productos.show", ['producto' => $producto]);
    }
//Metodo para store
public function store(Request $request)
{
   $producto= new Producto();
   $producto->nombre=$request->nombre;
   $producto->descripcion=$request->descripcion;
   $producto->categoria=$request->categoria;
   //return $request->all();
   $producto->save();
   return redirect()->route('producto.show', $producto->id);
}
}
