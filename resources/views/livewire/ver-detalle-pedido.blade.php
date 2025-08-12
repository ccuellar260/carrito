<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="flex mx-20">
        {{-- lado derecho --}}
        <div class="w-5/12 mt-6 px-5 space-y-5 ">
            @foreach ($pedidos as $pedido)
                <div class="border rounded-lg pt-3 px-3 bg-gray-100">
             
                    <button wire:click='verDetalle("{{ $pedido->id }}")' type="button"
                        class="flex border-b w-full mx-2 pb-2 p-2 hover:border hover:bg-white rounded-lg">
                        <div class="">
                            <img src="{{ asset('img/Productos/pollo1.jpg') }}" alt=""
                                class="h-16 w-20 rounded object-cover">
                        </div>

                        <div class="px-3 text-gray-500 ">
                            <div>
                                <span class="font-bold">ENTREGAS</span>
                                <span> {{ $pedido->fecha }} </span>
                                <span> {{ $pedido->hora_pedido }} hr </span>
                            </div>

                            <p class="font-semibold"> Nombre del producto</p>
                            <p> {{ $pedido->monto_total }}  Bs. {{ count($pedido->detalles) }} productos </p>
                            
                        </div>
                    </button>


                    <div class="flex items-center justify-around py-2 px-7 font-semibold">
                        <div class="flex space-x-1 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <p> Opinar</p>
                        </div>
                        <p> | </p>
                        <div class="flex space-x-1 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                            </svg>

                            <p> Repetir Orden </p>
                        </div>

                    </div>

                </div>
            @endforeach


            {{-- <a href="{{ route('Pedidos.Show', 1) }}"> Ir a detalle </a> --}}

        </div>
        
        @php
        $estados = ['En proceso', 'En camino', 'En Destino', 'Entregado'];
      @endphp
      

        <div class="w-7/12 bg-gray-100 mt-6 rounded-lg mr-5 border border-gray-200">
            <p class="py-2 text-center font-semibold">
                Detalles del pedido {{ $pedido_id }}
                {{-- estado: {{ $estados[$estado_actual] }} --}}
            </p>

            <div class="h-20  flex space-x-4 p-3">
                @for ( $i=0; $i < count($estados); $i++)
                    <button type="button" class="py-1 px-2 rounded-lg w-full
                    {{-- {{ $estado_actual >= $i ? 'bg-green-300' : 'bg-gray-300' }}" --}}
                    >
                    {{ $estados[$i] }}
                    </button>
                @endfor

            </div>
            

            <div class=" bg-white mx-10 px-10 py-2 rounded-lg">
                <table class="w-full ">
                    <thead>
                        <tr>
                            <th class="text-left">Producto</th>
                            <th class="text-right">Cantidad</th>
                            <th class="text-right">Precio</th>
                            <th class="text-right">Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detalles as $detalle)
                            <tr class="border-b ">
                                <td> {{ $detalle->producto->nombre }}</td>
                                <td class="text-right px-6">
                                     {{ $detalle->cantidad }}
                                    </td>
                                <td class="text-right"> 
                                    {{-- {{ $detalle->precio }} --}}
                                    {{ $detalle->producto->precio }}
                                </td>
                                <td class="text-right"> 
                                    {{-- {{ $detalle->precio * $detalle->cantidad }} --}}
                                    {{ $detalle->precio }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex justify-end mt-4">
                    <span> 
                        {{-- Total: {{ $detalle->pedido->monto_total }} Bs. --}}
                    </span>
                </div>
              
            </div>
          
        </div>



    </div>
</div>
