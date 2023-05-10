@extends('navbar')

@section('Contenido')
        <div class="flex mt-28 mx-5 "> <!--  md:flex -->
             {{--Lado izquierdo, cuadro  direcciones de envio --}}
            <div class="px-5 py-3 mb-10  w-9/12 border border-gray-200 rounded-lg bg-white  ">
                <div class="w-full mx-auto  font-light ">
                    <h6 class=" w-fit font-bold uppercase  border-b border-gray-600 ">Direccion de envio</h6>
                    {{-- //Direcciones --}}
                    {{-- @dd($direcciones) --}}



                    @foreach ($direcciones as $dir )
                        @if ($dir->predeterminado == 'si')
                        <div class=" bg-orange-50 border border-orange-300 rounded-lg mt-3 p-3 flex">
                            <div class=" pr-2">
                                <input type="radio" name="direccion" checked >
                            </div>
                            <div>
                                <p class="font-medium">
                                    <span class="font-bold"> {{ $dir->nombre }} </span>
                                    {{ $dir->direccion }}
                                </p>
                                <p class="text-sm font-medium"> Preguntar por Cristain al llegat al domicilio
                                </p>
                                <div class="text-sm text-teal-600 font-semibold space-x-1">
                                    <a href="">Editar direccion</a> <span
                                        class="text-black text-sm font-normal">|</span> <a href="">Agregar
                                        instrucciones de entrega</a>
                                </div>

                            </div>
                        </div>
                        @else
                        <div class=" border rounded-lg mt-3 p-3 flex">
                            {{-- //forearch --}}
                            <div class=" pr-2">
                                <input type="radio" name="direccion">
                            </div>
                            <div>
                                <p class="font-medium">
                                    <span class="font-bold"> {{ $dir->nombre }} </span>
                                    {{ $dir->direccion }}
                                </p>
                                <p class="text-sm font-medium"> Preguntar por Cristain al llegat al domicilio
                                </p>
                                <div class="text-sm text-teal-600 font-semibold space-x-1">
                                    <a href="">Editar direccion</a> <span
                                        class="text-black text-sm font-normal">|</span>
                                        <a href="">Agregar
                                        instrucciones de entrega</a>
                                </div>

                            </div>

                        </div>

                        @endif
                    @endforeach

                </div>
                    <button class="border-none text-teal-600  font-semibold mt-3 flex space-x-1 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-600 w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                          </svg>
                          <a href="{{ route('Direccion.Create') }}"> Agregar una nueva direccion</a>
                    </button>

                    <div class="border-b border-gray-300 mt-5 mb-2"></div>

                    {{--lista  productos --}}
                    <div class=" mt-10 px-5  bg-white ">
                        <div class="  font-light ">
                            <h6 class=" w-fit font-bold uppercase  border-b border-gray-600 ">Productos</h6>
                        </div>

                        @foreach ($carritos as $c )
                       <div class=" mt-3 pt-4 pb-2 px-3 border-b flex ">
                        <div class="w-32 h-28 ">

                            <img src="{{ asset('img/Productos/'.$c->options->imagen) }}" class="h-28 object-cover  rounded-sm">
                        </div>
                        <div class=" w-full px-2">
                            <p class=" font-semibold text-xl ">
                                {{ $c->name }}  -  {{ $c->options->precio}} bs
                            </p>
                            {{-- @dd($carritos) --}}
                            <div class="grid grid-cols-2 pl-3">
                                {{-- @dd( $c->options->Extra_Presa) --}}
                                @if ($c->options[0])
                                    <p class="border-b w-fit"> + Presa Extra:  {{ $c->options[0]}} 5 Bs </p>
                                @endif
                                @if ($c->options[1])
                                <p class="border-b w-fit"> + Cubiertos {{ $c->options[1]}}  </p>
                                @endif
                                @if ($c->options[2])
                                <p class="border-b w-fit"> + {{ $c->options[2]}} </p>
                                @endif
                                {{-- <p class="border-b w-fit"> + {{ $c->options->precio}}  </p> --}}
                            </div>
                            <div class="flex justify-between  mt-2 font-semibold">
                                <p> Unidades: {{ $c->qty}} </p>
                                <p> SubTotal: {{ $c->price}}Bs</p>
                            </div>
                        </div>
                       </div>

                        @endforeach
                    </div>
                    <div class="flex flex-row-reverse justify-between">
                        <p class="px-8 pt-3 tetx-2xl font-bold"> Total:  {{ $subTotal  }} Bs</p>
                    </div>
            </div>  <!-- fin de cuadro -->

            {{-- Lado Derecho--}}
            <div class="pl-5 px-10  w-3/12  fixed right-0 ">

                  {{-- cuadro  direcciones de pago --}}
               <div class="border border-gray-200 rounded-lg shadow px-5 py-3 bg-white">

                {{-- diseio de paypa --}}
                {{-- <div id="paypal-button-container"></div> --}}
                <div>
                    {{-- disenio de stripe --}}
                    <div class=" rounded-lg bg-white border border-gray-200 text-gray-800 font-light mb-6">
                        <div class="w-full p-3 border-b border-gray-200">
                            <div class="mb-5">
                                <label for="type1" class="flex items-center cursor-pointer">
                                    <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="tarjeta" id="type1" checked>
                                    <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png" class="h-6 ml-3">
                                </label>
                            </div>

                            <div class="mb-5">
                                <label for="type1" class="flex items-center cursor-pointer">
                                    <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="tarjeta" id="type1" >
                                    <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png" class="h-6 ml-3">
                                </label>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Nombre en la tarjeta</label>
                                    <div>
                                        <input class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="Cristan Cuellar" type="text"/>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Numero de tarjeta</label>
                                    <div>
                                        <input class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="0000 0000 0000 0000" type="text"/>
                                    </div>
                                </div>
                                <div class="mb-3 -mx-2 flex items-end">
                                    <div class="px-2 w-1/4">
                                        <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">F. venc.</label>
                                        <div>
                                            <select class="form-select w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                                                <option value="01">01 - January</option>
                                                <option value="02">02 - February</option>
                                                <option value="03">03 - March</option>
                                                <option value="04">04 - April</option>
                                                <option value="05">05 - May</option>
                                                <option value="06">06 - June</option>
                                                <option value="07">07 - July</option>
                                                <option value="08">08 - August</option>
                                                <option value="09">09 - September</option>
                                                <option value="10">10 - October</option>
                                                <option value="11">11 - November</option>
                                                <option value="12">12 - December</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="px-2 w-1/4">
                                        <select class="form-select w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                        </select>
                                    </div>
                                    <div class="px-2 w-1/4">
                                        <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">(CVV)</label>
                                        <div>
                                            <input class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="000" type="text"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="w-full p-3">
                            <label for="type2" class="flex items-center cursor-pointer">
                                <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type" id="type2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" width="80" class="ml-3"/>
                            </label>
                        </div> --}}
                    </div>
                    <div>
                        <button class="block w-full max-w-xs mx-auto bg-blue-600 hover:bg-blue-800 focus:bg-blue-800 text-white rounded-lg px-3 py-2 font-semibold"><i class="mdi mdi-lock-outline mr-1"></i> Realizar Pago</button>
                    </div>
                </div>



                <div class="border-b mt-3">
                    {{-- <button class="bg-yellow-400 w-full p-2 text-lg rounded-lg mb-0.5">Pagar</button> --}}
                    <p class="text-sm text-center px-5 mb-2"> Al realizar este pedido, aceptas los terminos y condiciones de pollos Kiki</p>
                </div>

                <p class="w-full  text-xl font-semibold py-3"> Confirmacion del Pedido</p>
                <div class="flex justify-between border-b">
                    <div>
                        <p>Productos:</p>
                        <p class="pb-1">Envio:</p>
                        <p>Total antes de impuestos:</p>
                        <p>Impuestos</p>
                    </div>
                    <div class="text-right">
                        <p> {{ $subTotal  }} Bs</p>
                        <p class="border-b w-full pb-1"> 20.00 Bs </p>
                        <p> --</p>
                        <p> -- </p>
                    </div>
                </div>
                <div class="flex justify-between pt-3 pb-2">
                    <p class="text-red-700 font-bold text-xl"> Total del pedido:</p>
                    <p class="font-semibold"> {{ $subTotal +20 }} Bs</p>
                </div>
               </div>
            </div> <!-- din de cuadro -->
        </div>


        <div class="w-full bg-slate-500 h-14 flex justify-center items-center  text-white text-xl font-bold">
            <p> Aqui puede ir alguna ifniormacin de contacto</p>
        </div>



        {{-- lado isquierda --}}
        <!-- <div class="px-5 w-7/12 lg:pr-10 border border-gray-200 rounded-lg p-3 bg-white ">
            <div class="w-full mx-auto  font-light ">

                <h6 class=" w-fit font-bold uppercase  border-b border-gray-600 ">Direccion de envio</h6>

                <div class=" bg-orange-50 border border-orange-300 rounded-lg mt-3 p-3 flex">
                    {{-- //forearch --}}
                    <div class=" pr-2">
                        <input type="radio" >
                    </div>
                    <div>
                        <p class="font-medium">
                            <span class="font-bold"> Nmbre Direccion </span>
                            Calle valencia, #451, zona los lotes 78022150
                        </p>
                        <p class="text-sm font-medium"> Preguntar por Cristain al llegat al domicilio
                        </p>
                        <div class="text-sm text-teal-600 font-semibold space-x-1">
                            <a href="">Editar direccion</a> <span
                                class="text-black text-sm font-normal">|</span> <a href="">Agregar
                                instrucciones de entrega</a>
                        </div>

                    </div>

                </div>



                <div class=" border rounded-lg mt-3 p-3 flex">
                    {{-- //forearch --}}
                    <div class=" pr-2">
                        <input type="radio">
                    </div>
                    <div>
                        <p class="font-medium">
                            <span class="font-bold"> Nmbre Direccion </span>
                            Calle valencia, #451, zona los lotes 78022150
                        </p>
                        <p class="text-sm font-medium"> Preguntar por Cristain al llegat al domicilio
                        </p>
                        <div class="text-sm text-teal-600 font-semibold space-x-1">
                            <a href="">Editar direccion</a> <span
                                class="text-black text-sm font-normal">|</span> <a href="">Agregar
                                instrucciones de entrega</a>
                        </div>

                    </div>

                </div>




                <div class=" border rounded-lg mt-3 p-3 flex">
                    {{-- //forearch --}}
                    <div class=" pr-2">
                        <input type="radio">
                    </div>
                    <div>
                        <p class="font-medium">
                            <span class="font-bold"> Nmbre Direccion </span>
                            Calle valencia, #451, zona los lotes 78022150
                        </p>
                        <p class="text-sm font-medium"> Preguntar por Cristain al llegat al domicilio
                        </p>
                        <div class="text-sm text-teal-600 font-semibold space-x-1">
                            <a href="">Editar direccion</a> <span
                                class="text-black text-sm font-normal">|</span> <a href="">Agregar
                                instrucciones de entrega</a>
                        </div>

                    </div>

                </div>
            </div>




                <button class="border-none text-teal-600  font-semibold mt-3 flex space-x-1 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-600 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                      </svg>
                      <p>Agregar una nueva direccion</p>
                </button>

            {{-- <div class="border-b my-5">

            </div> --}}

        </div> -->




@endsection
