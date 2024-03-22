@extends('layout.plantilla')
@section('title', 'crear_producto')
@section('content')

    <!-- component -->
    <div class='flex items-center justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'>
        <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
            <div class='max-w-md mx-auto space-y-6'>

                <form action="{{ route('producto.store') }}" method="POST">
                    @csrf

                    <h2 class="text-2xl font-bold ">INGRESAR UN NUEVO PRODUCTO</h2>
                    <hr class="my-6">
                    <label class="uppercase text-sm font-bold opacity-70">Producto</label>
                    <input type="text" name="nombre"
                        class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                    <label class="uppercase text-sm font-bold opacity-70">Descripcion</label>
                    <input type="text" name="descripcion" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                    <label class="uppercase text-sm font-bold opacity-70">Categoria</label>
                    <input type="text" name="categoria" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                    <label class="uppercase text-sm font-bold opacity-70">Encargado</label>
                    <select
                        name="user_id"class="w-full p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">

                        @foreach ($usuario as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach

                    </select>

                    <input type="submit"
                        class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300"
                        value="Guardar">

                </form>
                <a href="{{ route('producto.index') }}">
                    <button
                        class="py-3 px-6 my-2 bg-red-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300">Cancelar
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
