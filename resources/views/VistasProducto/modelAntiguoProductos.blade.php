<dialog id="myModal{{ $ii }}" class="h-1/1 w-80 sm:w-96  p-3 rounded-2xl modalFondo modalOpen">
    <!--bt_cerrar_modal-->
    <button id="bt_cerrar_modal{{ $ii }}" type="button"
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
    <div class=" h-auto lg:px-4  px-2 ">
        <p class="text-base font-extrabold  uppercase font-serif text-center py-2 pr-2" id="p_nombre_prod1">
            {{ $pp->nombre }} - myModal{{ $ii }}
        </p>
        <input type="hidden" name="id_producto" value="{{ $pp->id }}">

        {{-- mostrar las opciones que tiene
            - cantidad
            - nota
            - condimentos ?
            - cubiertos ?
            - doble arros
            --}}

        <div class="border-b mb-2 flex justify-between text-lg">
            <label for="cantidad"> Cantidad</label>
            <input class=" w-12 text-center " type="number" name="cantidad" value="1" min="1"
                wire:model.defer="cantidad">
        </div>


        {{-- crear nuvas opciones --}}
        {{-- <div class="border-b mb-2 flex justify-between text-lg">
            <label for=""> Guarnicion </label>
            <input class=" w-12 text-center " type="number" value="0" >
        </div>

        <div class="border-b mb-2 flex justify-between text-lg">
            <label for=""> Cantidad</label>
            <input class=" w-12 text-center " type="number" value="0" >
        </div> --}}

        {{-- //cargar a la base de datos --}}
        {{-- @livewire('aniadir-carrito-live') --}}
        <button type="button" wire:click='save()' id="bt_aniadir{{ $ii }}"
            class="bg-red-500 rounded py-1 px-2 text-red-100 border-black ">
            Aniadir Pedido
        </button>

    </div>

</dialog>
