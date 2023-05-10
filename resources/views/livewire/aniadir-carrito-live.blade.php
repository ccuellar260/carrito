<div>
    <dialog id="myModal{{ $ii }}" class="bg-orange-50  w-96 p-3 rounded-lg modalFondo modalOpen">
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

        <p class="text-base font-bold  uppercase text-center py-2 pr-2" >
            {{ $pp->nombre }}
        </p>

        <div class="p-3">

            {{-- mostrar las opciones que tiene
                - cantidad
                - nota
                - condimentos ?
                - cubiertos ?
                - doble arros
                --}}

            <div class="bg-white pb-3 px-4 ">
                {{-- foarr de tipo o sub categoria xdx d --}}
                @foreach ( $tipoCaja as  $t )
                    @if ($t->tipo == 'chica')
                    <div class="flex justify-between py-2 border-b border-gray-300">
                        <label for="{{ $t->nombre }}"> {{ $t->nombre }}</label>
                        <input class=" w-20 border rounded shadow pl-5 " type="{{ $t->tipo_letras }}" name="{{ $t->nombre }}" value="1" min="1"
                            wire:model.defer="{{ $t->nombre }}">
                    </div>
                    @endif
                @endforeach

                @foreach ( $tipoSelect as  $t )
                    <div class="flex justify-between py-2 border-b border-gray-300 ">
                        <label for=""> {{  $t->nombre }}</label>
                        <select  id=""  wire:model.defer="{{ $t->nombre }}">
                            <option value="nulo">Opciones</option>
                            @foreach ( $opcSelect as $opc)
                                @if ($opc->id_tipo_select == $t->id)
                                 <option value="{{ $opc->nombre}}">{{ $opc->nombre }} </option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                @endforeach
            </div>



            <div class="mt-2 ">
                <label class="px-1">Nota:</label>
            <br>
            <textarea class="border-2 p-1 rounded-md"
             name="nota" id="" cols="41" rows="3"></textarea>
            </div>

            <div class="flex justify-between px-4">
                <button id="bt_cancel_modal{{ $ii }}"  type="button"
                class="bg-gray-500 rounded mt-3 py-1 px-2 text-red-100 border-black ">
                Cancelar
            </button>
            <button type="button" wire:click='aniadirCarrito()' id="bt_aniadir{{ $ii }}"
                class="bg-red-500 rounded mt-3 py-1 px-2 text-red-100 border-black ">
                Aniadir al Pedido
            </button>
            </div>

        </div>

    </dialog>


</div>
