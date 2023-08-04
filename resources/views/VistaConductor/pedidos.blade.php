@extends('navbar')

@section('Contenido')
@php
    $estados = ['En proceso', 'En camino', 'En Destino', 'Entregado'];
@endphp

  <div class="flex justify-center w-full pt-10">
        <div class="w-1/2  bg-white space-y-6">
            <p class="text-center"> Pedidos </p>
            <div class="space-y-4">
                @foreach ($pedidos as $pedido )
                    <div class="py-3 ">
                        <p> {{ $pedido->id}}</p>
                        <p> {{ $pedido->direccion->nombre}}</p>
                        <p> {{ $pedido->direccion->numero}}</p>
                        <p> {{ $pedido->direccion->entrega}}</p>

                        <p> {{ $pedido->cliente->nombre}}</p>
                        <p> {{ $pedido->cliente->apellido}}</p>
                        <p> estado:  {{ $pedido->estado}}</p>
                    </div>
                    <div class="bg-red-200 flex space-x-4">
                        @for ( $i = 0; $i < $estados; $i++)

                        <form action="{{route('cambiarEstado')}}">
                            @csrf
                            <input type="hidden" name="id_estado" value="">
                            <button type="submit" class="py-1 px-2 rounded-lg bg-green-400">
                               {{$estados[$i]}}
                            </button>
                        </form>

                        @endfor





                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

