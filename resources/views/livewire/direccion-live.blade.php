<div>

                <div class="relative w-fit" id="div_direccines" >
                    <button type="button" id="bt_model_dir"
                        class="inline-flex px-5 items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                        aria-expanded="false">
                        @auth
                            @if ($direccioXD)
                            <p class="font-semi-bold text-base capitalize"> {{ $direccioXD->nombre }} - {{ $direccioXD->direccion }} </p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                            @else
                            <p class="font-semi-bold text-base capitalize"> sin direccoines, debo registrar </p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                            @endif
                        @endauth

                    </button>

                    <!-- //model xd -->
                    <div id="model_dir" class="absolute hidden  z-10  mt-1 flex w-full ">
                        <div
                            class=" bg-green-300  flex-auto overflow-hidden rounded-lg  text-sm leading-6 shadow-lg ring-1 ring-gray-900/5">
                            <div class="grid divide-x divide-gray-900/5 bg-gray-50 p-1">
                                @auth
                                @foreach ($direccionesXD as $dirXD )
                                @if ( $dirXD->direccio)
                                @foreach ($direccionesXD as $dirXD )
                                <div class="flex items-center  gap-x-2 px-2 py-1 font-semibold text-gray-900 hover:bg-gray-200">
                                    <button type="button" wire:click="cambiarDir('{{$dirXD->id}}')"
                                    class="flex border-b w-full">
                                        <span class="mx-2 capitalize ">
                                            {{ $dirXD->nombre }} - {{ $dirXD->direccion }}
                                        </span>
                                    </button>
                                </div>
                                @endforeach
                                @endif
                                <div class="flex items-center  gap-x-2 px-2 py-1 font-semibold text-gray-900 hover:bg-gray-200">
                                    <button type="button" wire:click="cambiarDir('{{$dirXD->id}}')"
                                    class="flex border-b w-full">
                                        <span class="mx-2 capitalize ">
                                            {{ $dirXD->nombre }} - {{ $dirXD->direccion }}
                                        </span>
                                    </button>
                                </div>
                                @endforeach
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
</div>
