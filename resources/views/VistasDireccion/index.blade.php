@extends('navbar')

@section('Contenido')
    <div class="py-8 px-16  w-full h-full bg-white">
        <h1 class="font-semibold mb-5 text-2xl"> Tus Direcciones</h1>

        <div class="grid grid-cols-3 gap-4">
            <div class="bg-white border-2 border-dashed border-gray-300 shadow h-60 rounded-lg">
                <button class="w-full h-full flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-16 h-16 text-gray-300 rounded-none ">
                        <path d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    {{-- <p class=" font-bold text-xl text-gray-500"> Agregar direccion</p> --}}
                    <a href="{{ route('Direccion.Create') }}" class=" font-bold text-xl text-gray-500">Agregar direccion</a>

                </button>
            </div>

            @foreach ($direcciones as $d)
                @if ($d->predeterminado == 'si')
                    <div class="bg-white  border border-gray-300 shadow h-60 rounded-lg">
                        <div class="h-1/6 p-1.5 px-8 flex space-x-3 border-b border-gray-300 text-green-600 font-semibold ">
                            <p> Predeterminado:</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                stroke="currentColor" class="w-6 h-6 text-green-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>

                        </div>
                        <div class="flex flex-col h-5/6 justify-between px-4 ">
                            <div class="p-4  text-sm text-gray-700">
                                <p class="font-bold"> {{ $d->nombre }}</p>
                                <p> {{ $d->direccion }} </p>
                                @if ($d->sub_direccion)
                                    <p> {{ $d->sub_direccion }} </p>
                                @endif
                                <p> {{ $d->telefono }} </p>
                                <p> ubicacion: </p>
                                <p class="text-sm text-cyan-700 font-medium "> Agregar instruccion de etrega</p>
                            </div>
                            <div class="flex text-sm text-cyan-700 font-medium space-x-2 p-2 px-4">
                                <p> Editar</p>
                                <p> |</p>
                                <p> Descartar </p>
                            </div>
                        </div>

                    </div>
                @endif
            @endforeach

            @foreach ($direcciones as $d)
                @if ($d->predeterminado == 'no')
                    <div class="bg-white  border border-gray-300 shadow h-60 rounded-lg">
                        <form action="{{ route('Direccion.Predeterminado',$d->id) }}" method="post">
                            @csrf
                            @method('post')
                            <button type="submit"
                            class="h-1/6 w-full p-1.5 px-8 leading-3 text-sm text-left flex space-x-3 border-b border-gray-300 text-gray-500 ">
                            <p> Elegir como predeterminado:</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        </button>
                        </form>
                        <div class="flex flex-col h-5/6 justify-between px-4 ">
                            <div class="p-4  text-sm text-gray-700">
                                <p class="font-bold"> {{ $d->nombre }}</p>
                                <p> {{ $d->direccion }} </p>
                                @if ($d->sub_direccion)
                                    <p> {{ $d->sub_direccion }} </p>
                                @endif
                                <p> {{ $d->telefono }} </p>
                                <p> ubicacion: </p>
                                <p class="text-sm text-cyan-700 font-medium "> Agregar instruccion de etrega</p>
                            </div>
                            <div class="flex text-sm text-cyan-700 font-medium space-x-2 p-2 px-4">
                                <p> Editar</p>
                                <p> |</p>
                                <p> Descartar </p>
                            </div>
                        </div>

                    </div>
                @endif
            @endforeach


        </div>



    </div>
@endsection
