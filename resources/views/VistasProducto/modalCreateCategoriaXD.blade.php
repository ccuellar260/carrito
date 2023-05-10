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
                <label for="select">Tipo Select</label>
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
            type="text" value="" id="nombreS">
        </div>

        <label  class="mt-4 font-semibold text-gray-900" for=""> Tipo de seleecionar:</label>
        <div class="flex justify-around">
            <div>
                <label >Seleccion normal</label>
                <input type="radio" name="tipo_select" checked>
            </div>

            <div>
                <label >Seleccion radio</label>
                <input type="radio" name="tipo_select">
            </div>
        </div>

        <div class="mt-4 w-full">
           <label class="font-semibold text-gray-900" for=""> Cantidad de Seleccion:</label>
            <div class="flex justify-around px-8">
                <div>
                    <label >Unica</label>
                    <input type="radio" name="cant_select" checked>
                </div>

                <div>
                    <label >Multiple</label>
                    <input type="radio" name="cant_select" >
                </div>
            </div>
        </div>

        <div class="mt-4">
            Opciones de seleccion:
            <div class="space-y-2" id="div_opciones_cat">
                <input class="outline-none border border-blue-500 w-full rounded focus:border-blue-700 px-2  " type="text" name="opcinesSelect">
                <input class="outline-none border border-blue-500 w-full rounded focus:border-blue-700 px-2  " type="text" name="opcinesSelect">
            </div>
            <button id="agregar_opc" wire:click='hola()'
            class="border rounded p-1 px-2 mt-2 bg-blue-800 text-white ">
             + Nueva Cajita
            </button>

        </div>

        <button  wire:click='hola()'
        class="border rounded p-1 px-2 mt-2 bg-blue-800 text-white ">
          Crear Opcion
        </button>


    </dialog>


</div>
