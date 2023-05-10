@extends('navbar')

@section('Contenido')
    {{-- <link rel="stylesheet" href="{{ asset('css/desabilitarInputNumber.css') }}" /> --}}

    <!--container max-w-lg-->

    {{-- <div class="lg:bg-blue-500 md:bg-red-300 xl:bg-yellow-400 2xl:bg-purple-600 sm:bg-black bg-gray-400">
    <label>
        celu = plomo,
        sm 640px = black ,
        md 768px = rojo ,
        lg 1024px = azul ,
        xl 1280px = amariilo ,
        2xl 1536px = purpura ,
    </label>
    </div> --}}

    <div class=" flex justify-center items-center">
        <div class=" w-9/12 ">
            {{-- <p> hola que tal</p> --}}
            <form action="{{ route('Producto.Store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="py-4 px-4 max-w-full m-3  sm:m-5 bg-white rounded-xl
                            lg:px-10  2xl:mx-20">
                    <p
                        class="mb-3 text-gray-900 text-center font-bold tracking-normal leading-tight
                               lg:mb-5  lg:text-xl ">
                        REGISTRAR UN PRODUCTO
                    </p>

                    {{-- <p id="p_pruducto_existe" class="text-black">
                    </p> --}}


                    <!-- GRID COLUMNAS-->
                    <div
                        class="grid grid-cols-1 grid-row-12 sm:grid-cols-4

                        gap-y-2 sm:gap-x-10 2xl:gap-x-16     sm:px-2 lg:px-5 ">



                        <div class="flex flex-col sm:col-span-4">
                            <div class="flex  ">
                                <label for="cliente"
                                    class="text-gray-800 text-sm font-semibold mb-1  leading-tight tracking-normal">
                                    Nombre de Producto:
                                </label>
                                {{-- @error('nombre')
                                    <p class="text-red-500 text-xs sm:text-sm px-1 sm:px-2  sm:pr-3 font-semibold rounded-xl  w-max">
                                        <small>*{{ $message }}</small>
                                    </p>
                                @enderror --}}
                            </div>
                            <input
                                class="mt-0 mb-1 text-gray-500 font-normal   h-8 pl-3 text-sm
                                border-gray-300 rounded border
                                focus:outline-none focus:border focus:border-blue-900 capitalize"
                                id="nombre" name="nombre" type="text" autocomplete="off"
                                value="{{ old('nombre') }}" />
                        </div>

                        <div class="flex flex-col sm:col-span-4">
                            <div class="flex  ">
                                <label for="cliente"
                                    class="text-gray-800 text-sm font-semibold mb-1  leading-tight tracking-normal">
                                    Descripcion:
                                </label>
                                {{-- @error('nombre')
                                    <p class="text-red-500 text-xs sm:text-sm px-1 sm:px-2  sm:pr-3 font-semibold rounded-xl  w-max">
                                        <small>*{{ $message }}</small>
                                    </p>
                                @enderror --}}
                            </div>
                            <input
                                class="mt-0 mb-1 text-gray-500 font-normal   h-8 pl-3 text-sm
                                border-gray-300 rounded border
                                focus:outline-none focus:border focus:border-blue-900 capitalize"
                                id="descripcion" name="descripcion" type="text" autocomplete="off"
                                value="{{ old('descripcion') }}" />
                        </div>




                        <div class="flex flex-col sm:col-span-2 ">
                            <label for="precio" class="text-gray-800 text-sm mb-1 font-semibold  ">
                                Precio:
                            </label>
                            {{-- <div class="relative">
                                <input type="text" class="w-full pr-10" />
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500">Texto de ejemplo</span>
                              </div> --}}
                            <div class="relative">
                                <input id="precio"
                                class="pl-3 text-gray-500 text-center font-normal w-full h-8 text-sm border-gray-300 rounded border
                                    focus:outline-none focus:border focus:border-blue-900 "
                                name="precio" type="number" step="0.01" autocomplete="off" value="{{ old('precio') }}"
                                placeholder="00.00 Bs" min="0" />
                                <span class="absolute inset-y-0 right-4 flex items-center pr-3 text-gray-500">Bs</span>

                            </div>

                        </div>

                        @livewire('tipo-opciones-live')


                        <div class="flex flex-col lg:mt-1 sm:col-span-2 after: ">
                            {{-- @include('VistaProductos.Modal_crear_proveedo') --}}

                            <div class="flex justify-between mb-1">
                                <label for="proveedor" class="text-gray-800 text-sm font-semibold   leading-tight tracking-normal">
                                    Categoria:
                                </label>
                                <button id="bt_crear_proveedorM" type="button"
                                    class="text-black text-xs hover:bg-blue-200 hover:border-black border rounded px-1 ">
                                    Crear Categoria </button>
                            </div>
                            <select name="categoria" id="select_categoria"
                                class="w-full mb-2  p-1 rounded-lg text-sm bg-gray-800 border  border-gray-700  text-gray-50 font-semibold focus:border-blue-500 focus:outline-none">
                                @foreach ($categorias as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                                @endforeach

                            </select>
                        </div>

                        <!-- lista de las opciones que tendra el producto
                            por defecto vendra cantidad

                        -->
                        <!--
                        <div class="flex flex-col lg:mt-1 ">

                            <div class="flex justify-between mb-1">
                                <label for="proveedor" class="text-gray-800 text-sm font-semibold   leading-tight tracking-normal">
                                    Tipo de Opciones:
                                </label>
                            </div>

                            <div class="flex justify-between font-semibold px-1">
                                <p>Nombre</p>
                                <p>Tipo</p>
                                <p>Accion</p>
                            </div>

                            <div class="space-y-2">
                                <div class="flex justify-between w-full bg-gray-200 border border-gray-400 px-2 py-1 rounded-lg">
                                    <div class="flex justify-between w-8/12">
                                        <p> Cantidad </p>
                                        {{-- <input class="bg-white px-1 w-20 rounded-lg border border-black " type="text" value="caja chica" disabled> --}}
                                        <input class=" px-1 w-20  " type="text" value="Caja chica" disabled>

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
                            </div>

                            <button id="bt_crear_op" type="button"
                            class="text-white text-xs w-fit mt-2 p-1 bg-gray-800 hover:bg-blue-200 hover:border-black border rounded px-1 ">
                            Crear Tipo de opciones </button>
                            {{-- @extends('VistasProducto.modalCreateCategoria') --}}
                        </div>
                           -->


                        {{-- estado del articulo --}}
                        <div class="sm:col-span-2  ">
                            <label for="" class="text-gray-800 text-sm font-semibold   leading-tight tracking-normal">
                                Estado del Articulo:
                            </label>
                            <div class="flex justify-around 2xl:w-2/4  items-center ">
                                <div class=" ">
                                    <input type="radio" id="est_habilitado" name="estado" class="" checked
                                        value="Habilitado">
                                    <label class="text-gray-700 text-sm " for="est_habilitado">Habilidato</label>
                                </div>
                                <div>
                                    <input type="radio" id="est_desabilitado" name="estado" value="Desabilitado">
                                    <label class="text-gray-700 text-sm" for="est_desabilitado">Desabilitado</label>
                                </div>
                            </div>
                        </div>



                        <!-- sm:row-start-3 sm:col-start-2 sm:row-span-4 -->
                        <div
                            class="col-span-2 p-4">
                            <div class=" flex justify-between  ">
                                <!-- flex justify-between mt-4 lg:w-1/2-->
                                <button
                                    class="text-xs  xl:text-xl font-medium text-gray-600 dark:text-gray-400
                                border-2 border-lg border-gray-400 rounded-lg px-2 w-fit"
                                    type="button" id="button_subir_foto">
                                    Subir Foto
                                </button>
                                <input id="file_foto_ventas" name="foto" type="file" class="sr-only">

                            </div>
                            <div class="mt-4 flex flex-col items-center ">
                                <img id="img_fotoventas" src="{{ asset('img/Productos/' . old('foto', 'pollo.png')) }}"
                                    alt="no se cargo" height=""
                                    class=" h-44 sm:h-64 xl:h-64 object-cover rounded-xl border-2 border-spacing-2 border-black">
                            </div>

                        </div>


                        <div class=" sm:col-span-4 flex flex-row-reverse justify-between  py-1 ">
                            <button type="submit" class=" bg-blue-500 py-1 px-3 text-lg text-gray-100  rounded-xl">
                                Guardar
                            </button>
                        </div>




                    </div> <!-- end del div de columnas -->

                </div> <!-- end de div principal-->

            </form>
        </div>
    </div>



    {{-- <script src="{{ asset('js/Proveedor/cargar_imagen.js') }}"></script>
    <script src="{{ asset('js/Proveedor/ProductoExiste.js') }}"></script> --}}

     <script src="{{ asset('js/vistaProductoCreate.js') }}"></script>
    {{-- <input type="hidden" id="pantalla" value="producto"> --}}
@endsection

