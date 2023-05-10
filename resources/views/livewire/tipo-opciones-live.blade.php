<div class=" sm:col-span-2  row-span-6 ">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="flex flex-col lg:mt-1 ">

        <div class="flex justify-between mb-1">
            <label for="proveedor" class="text-gray-800 text-sm font-semibold   leading-tight tracking-normal">
                Tipo de Opciones:
            </label>
        </div>


        <div class=" flex flex-row-reverse justify-between">
            <button id="bt_crear_op" type="button"
            class="text-white text-xs w-fit mt-2 p-1 bg-gray-800 hover:bg-blue-200 hover:border-black border rounded px-1 ">
            Crear tipo de opciones </button>
           </div>
        <!--div pra seleccinar algunas de la opciones -->
<div class="border overflow-y-auto p-5 my-2 px-3 rounded-lg  h-96">
    <div class="flex justify-between font-semibold px-1">
        <p>Nombre</p>
        <p>Tipo</p>
        <p>Precio</p>
        <p>Accion</p>
    </div>
    <div class="space-y-2">
        {{-- opcinoes sole de tipo de select --}}
        @for ($i = 0; $i < count($tipoSelects); $i++)
        <div class="flex justify-between">

            <div id="div_padre_opc" class="relative w-full p-2  border rounded-md cursor-pointer hover:bg-gray-200" onclick="selectInput({{ $i }})">
                <label class="inline-flex items-center w-full">
                  <input type="checkbox" class="form-radio" name="options[]" id="option{{$i}}" value="{{$tipoSelects[$i]->id}}">
                 <div class="flex justify-between w-full ">
                    <p class="ml-2">{{ $tipoSelects[$i]->nombre }}</p>
                    {{-- <span class="ml-2">{{ $tipoSelect[$i]->precio }}</span> --}}
                    <p class="mr-8"> 5 Bs</p>
                 </div>

                </label>
                <!-- para que salga un modal al poner el mouse por ahi
                <div id="div_hijo_opc" class="absolute  bg-gray-100  right-2 bottom-8 px-2 py-1 border shadow-md rounded ">
                    {{-- <p class="border-b border-gray-400 pt-0.5 overflow-visible ">hola xd  ss</p> --}}
                    @foreach ($opcionesSelects as $op)
                        @if ($op->id_tipo_select == $tipoSelects[$i]->id)
                            <p class="border-b border-gray-400 pt-0.5"> {{ $op->nombre }}</p>
                        @endif
                    @endforeach
                </div>
            -->
            </div>
            <svg class="w-6 h-6 text-black  hover:text-red-600  "
                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
            </path>
            </svg>
        </div>
        @endfor


        <!--
        {{-- presa extra --}}
        <div class="flex justify-between w-full bg-gray-200 border border-gray-400 px-2 py-1 rounded-lg">
            <div class="flex justify-between w-8/12">
                {{-- <p> select </p>
                <input class="bg-white px-1 w-20 rounded-lg border border-black " type="text" value="caja chica" disabled> --}}
                Presa Extra
                <div class="relative bg-red-500" id="div_model">
                    <button type="button" id="bt_model"
                        class="inline-flex items-center capitalize gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                        aria-expanded="false">
                       Seleccion  >
                    </button>

                    {{-- //model xd --}}
                    <div id="model" class="absolute hidden -left-5 z-10  mt-1 flex w-40 ">
                        <div  class="flex-auto overflow-hidden rounded-lg  text-sm leading-6 shadow-lg ring-1 ring-gray-900/5">
                            <div class=" grid divide-x divide-gray-900/5 bg-gray-50">
                                <div class="flex justify-between px-3 py-1 font-semibold text-gray-900
                                 hover:bg-gray-100 border-b border-red-200">
                                    <p> Pierna</p>
                                    <p>5.0 Bs</p>
                                    <p> e</p>
                                </div>
                                <div class="flex justify-between px-3 py-1 font-semibold text-gray-900
                                 hover:bg-gray-100 border-b border-red-200">
                                    <p> Contra</p>
                                    <p>5.0 Bs</p>
                                    <p> e</p>
                                </div>
                                <div class="flex justify-between px-3 py-1 font-semibold text-gray-900
                                 hover:bg-gray-100 border-b border-red-200">
                                    <p> Pecho</p>
                                    <p>5.0 Bs</p>
                                    <p> e</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-1/12">
                <p> eli</p>
            </div>
        </div>
        {{-- cubierto --}}
        <div class="flex justify-between w-full bg-gray-200 border border-gray-400 px-2 py-1 rounded-lg">
            <div class="flex justify-between w-8/12">
                {{-- <p> select </p>
                <input class="bg-white px-1 w-20 rounded-lg border border-black " type="text" value="caja chica" disabled> --}}
                Cubierto
                <div class="relative bg-red-500" id="div_model">
                    <button type="button" id="bt_model"
                        class="inline-flex items-center capitalize gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                        aria-expanded="false">
                       Seleccion radio >
                    </button>

                    {{-- //model xd --}}
                    <div id="model" class="absolute  hidden -left-5 z-10  mt-1 flex w-40 ">
                        <div  class="flex-auto overflow-hidden rounded-lg  text-sm leading-6 shadow-lg ring-1 ring-gray-900/5">
                            <div class=" grid divide-x divide-gray-900/5 bg-gray-50">
                                <div class="flex justify-between px-3 py-1 font-semibold text-gray-900
                                 hover:bg-gray-100 border-b ">
                                    <p> si </p>
                                    {{-- <p>5.0 Bs</p> --}}
                                    <svg class="w-6 h-6 text-black  hover:text-red-600  "
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                                </div>
                                <div class="flex justify-between px-3 py-1 font-semibold text-gray-900
                                 hover:bg-gray-100 border-b ">
                                    <p> no </p>
                                    {{-- <p>5.0 Bs</p> --}}
                                    <svg class="w-6 h-6 text-black  hover:text-red-600  "
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-1/12">
                <svg class="w-6 h-6 text-black  hover:text-red-600  "
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
            </div>
        </div>
        -->
    </div>
</div>

        <!-- modal para crear un seleccion-->
        <div>
            <dialog id="ModalCreateCat" class="bg-white  w-96 p-8 rounded-lg modalFondo modalOpen">
                <!--bt_cerrar_modal-->
                <button id="bt_cerrar-modal" type="button"
                    class="cursor-pointer absolute top-0 right-0 mt-2 mr-2 text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20" height="20"
                        viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </button>



                <!--div principal-->
                <p class="font-semibold  text-center w-full"> OPCIONES ADICIONALES A LOS PRODUCTOS </p>
                <p class="mt-4 font-semibold text-gray-900"> Que tipo se opcion prefiere:</p>
                <div class="flex justify-around">
                    <div>
                        <label for="caja">Tipo Caja</label>
                        <input type="radio" name="tipo" id="caja" checked>
                    </div>
                    <div>
                        <label for="select">Tipo Seleccion</label>
                        <input type="radio" name="tipo" id="select">
                    </div>
                </div>

                {{-- Tipo Caja // poner si es numero o texto--}}
                {{-- <div>
                    <div class=" mt-4 border-b w-full">
                        <label for="">Nombre:</label>
                        <input class="outline-none w-9/12" type="text" value="">
                    </div>

                    <div class=" mt-4  w-full">
                        <label for="">Tipo de caja:</label>
                        <div class="flex justify-around">
                            <div>
                                <label for="cajaC">Caja Chica</label>
                                <input type="radio" name="tipoCaja" id="cajaC">
                            </div>
                            <div>
                                <label for="cajaG">Caja Grande</label>
                                <input type="radio" name="tipoCaja" id="cajaG">
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- Tipo Select --}}

                <div class=" my-4 w-full">
                    <label class="font-semibold text-gray-900" for="nombreS">Nombre:</label> <br>
                    <input class="outline-none w-full border border-blue-500 rounded-lg p-2 py-1"
                    type="text" value="" id="nombreS"  wire:model.defer='nombreS'>
                </div>

                <label  class="mt-4 font-semibold text-gray-900" for="">
                     Tipo de seleecionar:
                </label>
                <div class="flex justify-around">
                    <div>
                        <label >Seleccion normal</label>
                        <input type="radio" name="tipo_select" value="normal" wire:model.defer='tipoSelect'>
                    </div>

                    <div>
                        <label >Seleccion radio</label>
                        <input type="radio" name="tipo_select" value="radio" wire:model.defer='tipoSelect'>
                    </div>
                </div>

                <div class="mt-4 w-full">
                   <label class="font-semibold text-gray-900" for="">
                    Cantidad de Seleccion:
                </label>
                    <div class="flex justify-around px-8">
                        <div>
                            <label >Unica</label>
                            <input type="radio" name="cant_select" value="unica"  wire:model.defer='cantSelect'>
                        </div>

                        <div>
                            <label >Multiple</label>
                            <input type="radio" name="cant_select" value="multiple" wire:model.defer='cantSelect' >
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    Opciones de seleccion:
                    <div class="space-y-2" id="div_opciones">
                        <input class="outline-none border border-blue-500 w-full rounded focus:border-blue-700 px-2  "
                         type="text" name="opcinesSelect" >
                    </div>
                    <button id="agregar_opc"
                    class="border rounded p-1 px-2 mt-2 bg-blue-800 text-white ">
                     + Nueva Cajita
                    </button>

                </div>


                {{-- wire:click='EliminarUnProd({{$cc->id}}) --}}
                <button type="button"  id="crearOP"
                class="border rounded p-1 px-2 mt-2 bg-blue-800 text-white ">
                  Crear Opcion
                </button>

            </dialog>
        </div>

        {{-- @extends('VistasProducto.modal_selecionar_opciones') --}}

                {{-- wire:click='save()' --}}
        {{-- <button type="button" wire:click="hola( '{{ $xd }}','{{ $dos }}' )" --}}

    </div>


</div>
