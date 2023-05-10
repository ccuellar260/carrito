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

        <div class=" pl-4 pt-4 mt-10  w-full">


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
                                        <img src="{{ asset('img/Productos/'. $p->imagen) }}"
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
