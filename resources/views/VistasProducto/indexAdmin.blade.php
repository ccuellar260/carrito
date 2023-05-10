@extends('navbar')

@section('Contenido')
    <!-- component -->
<section class="bg-white">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-bold text-center text-gray-800 capitalize lg:text-4xl mb-12">LISTA DE PRODUCTOS</h1>


        {{-- <input type="checkbox" name="roles[]" id="a" value="1">
        <label for="1">hola</label>

        <input type="checkbox" name="roles[]" id="b" value="2">
        <label for="b">hola</label>
        <input type="checkbox" name="roles[]" id="c" value="3">
        <label for="c">hola</label>

        <br> <br><br> --}}
        <a href="{{ route('Producto.Create') }}" class=" py-2 px-4  text-white  bg-violet-950 rounded-lg ">
             Crear Producto
        </a>
        @foreach ($categorias as $c)
        <h2 class="text-2xl mt-8 font-bold tracking-tight text-gray-900">{{ $c->nombre }}</h2>
        @php
            $i=0
        @endphp
       <div class="grid grid-cols-4 gap-8 mt-2 ">
        @foreach ($productos as $pro)
                        @if ($pro->id_categoria == $c->id)
                            @php $i++ @endphp
        <div class=" flex flex-col items-center pt-8 pb-4 transition-colors shadow-2xl border  duration-200 transform cursor-pointer group hover:bg-blue-600 rounded-xl">
            <img class="object-cover w-32 h-32 rounded-lg ring-4 ring-gray-700"
            src="{{ asset('img/Productos/'.$pro->imagen) }}" alt="">

            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize group-hover:text-white">{{ $pro->nombre }}</h1>

            <p class="mt-2 text-2xl text-red-500 font-semibold capitalize group-hover:text-gray-300">{{ $pro->precio }} Bs</p>

            <div class="flex flex-col  mt-3 -mx-2 font-semibold">
               <div class="">
                <a href="#" class="mx-2  text-violet-950 hover:text-gray-500  group-hover:text-white" aria-label="Reddit">
                    Editar
                </a>

                <a href="#" class="mx-2  text-violet-950 hover:text-gray-500  group-hover:text-white" aria-label="Reddit">
                    Eliminar
                </a>

               </div>
                <a href="#" class="mx-2 mt-2 text-violet-950 hover:text-gray-500  group-hover:text-white" aria-label="Reddit">
                    Agregar Caracteristica
                </a>
            </div>
        </div>
        @endif
       @endforeach
    </div>
    @endforeach
    </div>
</section>
@endsection
