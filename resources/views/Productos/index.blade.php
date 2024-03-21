@extends('layout.plantilla')
@section('title', 'principal')
@section('content')
    <h1> Lista de Productos: </h1>
    <br>
    <a href="{{ route('producto.create') }}">Nuevo Registro</a>
    <br>
    <ul>
        @foreach ($producto as $prod)
            <li>
                {{-- {{$prod}} --}}
                <a href="{{ route('producto.show', $prod->id ) }}">
                    Id:{{ $prod->id }}  Nombre: {{ $prod->nombre }}=> Descripcion: {{ $prod->descripcion }} => Categoria: {{ $prod->categoria }}
                </a>
                {{-- {{ route('producto.show', $prod->id )}} --}}

            </li>
        @endforeach
    </ul>
   
    {{-- para la paginacion--}}

{{$producto->links()}}

@endsection
