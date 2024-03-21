@extends('layout.plantilla') 
@section('title', 'crear_producto') 
@section('content')
<h1> Aqui se creará un nuevo producto</h1>

<form action="{{route('producto.store')}}" method="POST">
    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre">
    </label>
    <br>
    <label>
        Descripcion:
        <br>
        <input type="text" name="descripcion">
    </label>
    <br>
    <label>
        Categoria:
        <br>
        <input type="text" name="categoria">
    </label>
    <br>
    <button type="submit">Guardar</button>
</form>
@endsection