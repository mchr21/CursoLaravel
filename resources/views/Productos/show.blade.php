@extends('layout.plantilla')
@section('title', 'mostrar')
@section('content')
    <br>
    <a href="{{ route('producto.index') }}">Volver</a>
    <h1> El nombre del producto es: {{ $producto->id }} </h1>
    <br>
    <p><strong>Nombre:</strong> {{ $producto->nombre }} </p>
    <p><strong>Descripcion:</strong> {{ $producto->descripcion }} </p>
    {{-- <p><strong>Categoria:</strong> {{$producto->categoria}} </p> --}}
@endsection
