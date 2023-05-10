@extends('navbar')

@section('Contenido')
    <div class=" flex justify-center">
        <div class="w-6/12 my-8 text-xl  text-gray-800">
            <h1 class="font-bold text-2xl">Agregar una nueva direccion</h1>
            <form action="{{ route('Direccion.Store') }}" method="post">
                @csrf

                <div class="mt-4 border shadow-lg p-5 rounded-lg  bg-white space-y-3">
                    <div>
                        <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">
                            Nombre de la direccon*
                        </label>
                        <input id="nombre" name="nombre" type="text" autocomplete="off" required
                            class="block w-full px-2 capitalize
                         rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2
                         focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>

                    <div>
                        <label for="numero" class="block text-sm font-medium leading-6 text-gray-900">
                            Numero de telefono (opcional)
                        </label>
                        <input id="numero" name="numero" type="number" autocomplete="off"
                            class="block w-full px-2
                         rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2
                         focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>

                    <div>
                        <label for="direccion" class="block text-sm font-medium leading-6 text-gray-900">
                            Direccion
                        </label>
                        <input id="direccion" name="direccion" type="text" autocomplete="off" required
                            placeholder="Nombre de la calle"
                            class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2
                         focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <input id="sub_direccion" name="sub_direccion" type="text" autocomplete="off"
                            placeholder="Depto, unidad, edificio, piso, etc. (opcional)"
                            class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2
                         focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1">

                        <button class="text-sm flex items-center mt-1 text-cyan-800 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>

                            <span>Punto de entrega</span> </button>
                    </div>


                    <div class=" ">
                        <input type="radio" value="si" name="preferido">
                        <span class="text-sm " for="">Marcar como direccoin preferida</span>
                        <input type="hidden" value="no" name="preferido" checked class="">
                    </div>

                    <div>
                        <label for="nota" class="block text-sm font-medium leading-6 text-gray-900">
                            Introduccoin de entrega(opcional)
                        </label>
                       <textarea name="nota" id="" rows="2"  class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2
                       focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                    <button type="submit"
                     class="text-sm border border-gray-900 px-2 py-1 rounded-lg bg-gray-700 text-white">
                     Agrega una direccion</button>

                </div>

            </form>


        </div>
    </div>
@endsection
