<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pollos Kiki</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}">

    @livewireStyles()
</head>

<body class="bg-blue-50">

    <div class=" bg-white  shadow-lg h-14 flex justify-between fixed top-0 w-full">
        <div class=" flex m-2">

          <p class="text-center w-full">  Conducto Pedidos</p>

        </div>
    </div>

    <div class=" mt-14 ">
       
@php
$estados = ['En proceso', 'En camino', 'En Destino', 'Entregado'];
@endphp

<div class="flex justify-center w-full pt-10">
    <div class="w-1/2  bg-white space-y-6">
        <p class="text-center"> Pedidos </p>
        <div class="p-6">
            @foreach ($pedidos as $pedido )
               <div class="border p-2 rounded-lg mt-4">
                <div class="  ">
                    <div class="flex justify-between">
                        <p> pedido:  {{ $pedido->id}}</p>
                    <p> {{ $pedido->direccion->nombre}}</p>
                    </div>
                    <p> {{ $pedido->direccion->numero}}</p>
                    <p> {{ $pedido->direccion->entrega}}</p>

                    <p> Cliente: {{ $pedido->cliente->nombre}} {{ $pedido->cliente->apellido}}</p>
             
                    <p> estado:  {{ $estados[$pedido->estado     ]}}</p>
                </div>
                <div class=" flex space-x-4">
                    
                    @for ( $i = 0; $i < count($estados); $i++)
                    <form action="{{route('cambiarEstado')}}" method="POST" >
                        @csrf
                        <input type="hidden" name="estado" value="{{ $i }}">
                        <input type="hidden" name="pedido" value="{{ $pedido->id }}">
                        <button type="submit" class="py-1 px-2 rounded-lg
                        {{ $pedido->estado >= $i ? 'bg-green-300' : 'bg-gray-300' }}"
                        >
                         {{ $estados[$i] }}
                         </button>
                    </form>
                    
                    @endfor
                </div>
               </div>
            @endforeach
        </div>
       
    </div>
</div>
    </div>






</body>
</html>



