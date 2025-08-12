@extends('navbar')

@section('Contenido')
    {{-- container --}}
    <div class="4xl:container mx-8 flex  my-8  gap-3 mt-20 ">
        <div class="bg-white h-fit flex-none w-2/12 border rounded-lg shadow-md p-5 text-sky-950 ">
            <div class="flex space-x-1 mb-1">
                <p class="font-bold"> Categorias</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class=" mt-0.5 w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>

            </div>
            <div class="flex flex-col">
                {{-- <a href="">Combos & Promociones </a>
                <a href="">Baldes de Alitas</a>
                <a href="">Pollo Lenia & Broasted</a>
                <a href="">Ensaladas</a>
                <a href="">Bebidas</a>
                <a href="">Bebidas 2L</a>
                <a href="">Bebidas 2L</a>
                <a href="">Bebidas 2L</a>
                <a href="">Bebidas 2L</a> --}}
                @foreach ($categorias as $c)
                    <a href="">{{ $c->nombre }}</a>
                @endforeach
            </div>
        </div>

        {{-- aqui ira el estado del pedido  --}}
        {{-- <div class="w-7/12 h-20 rounded-3xl text-white flex flex-col items-center fixed top-12 left-72 bg-red-400 ">
        </div> --}}

        <div class=" pl-4 w-full ">
            @foreach ($pedidos as $pedido)
            @if ($pedido->estado < 3)
            @php
            $estado = ['En proceso', 'En camino', 'En Destino', 'Entregado'];
            $color = [];
            for ($i=0; $i < 4; $i++) { 
                if ($i <= $pedido->estado) {
                    $color[$i] = 'green';
                }else{
                    $color[$i] = 'gray';
                }
            }
        @endphp
        <button class=" mb-4 w-full bg-white rounded-lg py-2 px-5 hover:scale-95 border border-green-200 shadow-md ">
            <div class="flex justify-between">
                <p class="mb-2 font-semibold"> Pedido #{{ $pedido->id }} ({{ $pedido->detalles[0]->producto->nombre }}...)  </p>
                <p class="mb-2 font-semibold"> estado:{{ $estado[ $pedido->estado] }}</p>
                <p class="mb-2 font-semibold"> monto total: {{ $pedido->monto_total + 20 }} bs</p>

            </div>
            <ol class="flex items-center w-full">
                <li
                    class="flex w-full items-center {{ $pedido->estado == 0 ? 'after:animate-pulse' : '' }}  after:content-[''] after:w-full 
                    after:h-1 after:border-b after-border-{{ $color[1] }}-200-xd after:border-8 after:inline-block ">
                    <span
                        class="flex items-center justify-center w-10 h-10 estado-{{ $color[0] }}-200-xd rounded-2xl
                         lg:h-12 lg:w-12 shrink-0 ">
                        {{-- <svg class="w-3.5 h-3.5 text-{{ $color[0] }}-600-xd lg:w-4 lg:h-4 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg> --}}
                        <svg class="w-6 h-6 text-{{ $color[0] }}-600-xd  "
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                          </svg>
                          
                    </span>

                </li>
                <li
                    class="flex w-full items-center {{ $pedido->estado == 1 ? 'after:animate-pulse' : '' }} after:content-[''] after:w-full 
                    after:h-1 after:border-b after-border-{{ $color[1] }}-200-xd after:border-8 after:inline-block ">
                    <span
                        class="flex items-center justify-center animate-pulse w-10 h-10 estado-{{ $color[1] }}-200-xd rounded-2xl 
                        lg:h-12 lg:w-12 shrink-0  {{ $pedido->estado == 0 ? 'after:animate-pulse' : '' }}">
                        {{-- <svg class="w-3.5 h-3.5 text-{{ $color[1] }}-600-xd lg:w-4 lg:h-4 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg> --}}
                        <svg  class="w-6 h-6 text-{{ $color[1] }}-600-xd "
                        xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 
                            16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7
                             0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160
                              368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z"
                            />
                        </svg>
                    </span>
                </li>
                <li
                    class="flex w-full items-center   {{ $pedido->estado == 2 ? 'after:animate-pulse' : '' }}
                    after:content-[''] after:w-full after:h-1 after:border-b after-border-{{ $color[2] }}-200-xd after:border-8 after:inline-block dark:after:border-gray-700">
                    <span
                        class="flex items-center justify-center w-10 h-10 estado-{{ $color[2] }}-200-xd rounded-full 
                        lg:h-12 lg:w-12 shrink-0  {{ $pedido->estado == 1 ? 'after:animate-pulse' : '' }}">
                        <svg class="w-4 h-4 text-{{ $color[2] }}-600-xd lg:w-5 lg:h-5 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path
                                d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                </li>
                <li class="flex items-center w-fit">
                    <span
                        class="flex items-center justify-center w-10 h-10 estado-{{ $color[3] }}-200-xd rounded-full 
                        lg:h-12 lg:w-12 shrink-0  {{ $pedido->estado == 2 ? 'after:animate-pulse' : '' }}">
                        <svg class="w-4 h-4 text-{{ $color[3] }}-600-xd lg:w-5 lg:h-5 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v3H7V2Zm5.7 8.289-3.975 3.857a1 1 0 0 1-1.393 0L5.3 12.182a1.002 1.002 0 1 1 1.4-1.436l1.328 1.289 3.28-3.181a1 1 0 1 1 1.392 1.435Z" />
                        </svg>
                    </span>
                </li>
            </ol>
            <ol class="flex items-center w-full font-semibold">
                <li class="flex w-full items-center text-gray-600  ">
                    En Preparación
                </li>
                <li class="flex w-full items-center text-gray-600  ">
                    En Camino
                </li>
                <li class="flex w-full items-center text-gray-600  ">
                    En Destino
                </li>
                <li class="flex w-fit items-center text-gray-600  ">
                    Entregado
                </li>
            </ol>
        </button>
            @endif
            @endforeach
        
            @php $i = 0; @endphp
            @foreach ($categorias as $c)
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">{{ $c->nombre }}</h2>

                <div class="mt-3 mb-8  grid grid-cols-3 gap-5  ">
                    @foreach ($productos as $p)
                        @if ($p->id_categoria == $c->id)
                            @php $i++ @endphp

                            <div>
                                <button class="flex w-full  justify-between  p-3 bg-white rounded-md shadow"
                                    id="bt_abrir_modal{{ $i }}" type="button">
                                    <div class="h-20 text-left flex flex-col justify-between pr-3">
                                        <div>
                                            <p class=" font-semibold">
                                                {{ $p->nombre }}
                                            </p>
                                            <p class=" text-xs ">
                                                {{ $p->descripcion }}
                                            </p>
                                        </div>
                                        <p class=" font-semibold text-left  text-gray-900">
                                            {{ $p->precio }} Bs
                                        </p>
                                    </div>
                                    <div class="w-20  ">
                                        <img src="{{ asset('img/Productos/' . $p->imagen) }}"
                                            class="h-20 object-cover  rounded" loading="lazy">
                                    </div>
                                </button>
                                @livewire('aniadir-carrito-live', ['ii' => $i, 'id_prod' => $p->id])
                            </div>




                            {{--
                                        <button id="bt_abrir_modal{{$i}}" type="button" class=" aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-44 ">
                                            <img src="{{ asset('img/' . $p->imagen) }}"
                                                alt="Front of men&#039;s Basic Tee in black."
                                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                        </button>

                                    <div class="mt-4 flex justify-between">
                                        <div>
                                            <!--------------------------------------- putos ----------------------------------->
                                            @livewire('aniadir-carrito-live', ['ii' => $i, 'id_prod' => $p->id])
                                            <p class="mt-1 text-sm text-gray-500">{{ $p->slug }}</p>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900">{{ $p->precio }} Bs</p>
                                    </div>
                                      --}}
                        @endif
                    @endforeach
                </div>
            @endforeach
            {{-- <h2 class="text-2xl font-bold tracking-tight text-gray-900">Combos & Promociones</h2> --}}



        </div>

        <div class=" w-4/12 ">
            @livewire('mi-pedido')
        </div>



    </div>

    <input type="hidden" id="cant_prod" value="{{ $i }}">
    <script src="{{ asset('js/modals.js') }}"></script>
    {{-- <script src="{{ asset('js/modals_perfil.js') }}"></script> --}}
@endsection
