@extends('navbar')

@section('Contenido')
        <div class="flex mt-28 mx-5 "> <!--  md:flex -->
             {{--Lado izquierdo, cuadro  direcciones de envio --}}
            <div class="px-5 py-3 mb-10  w-7/12 border border-gray-200 rounded-lg bg-white  ">
                <div class="w-full mx-auto  font-light ">
                    <h6 class=" w-fit font-bold uppercase  border-b border-gray-600 ">Direccion de envio</h6>
                    {{-- //Direcciones --}}
                    <div class=" bg-orange-50 border border-orange-300 rounded-lg mt-3 p-3 flex">
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

                    <div class="border-b border-gray-300 mt-5 mb-4"></div>

                    {{--lista  productos --}}
                    <div class=" mt-7 px-5  bg-white ">
                        <div class="  font-light ">
                            <h6 class=" w-fit font-bold uppercase  border-b border-gray-600 ">Productos</h6>
                        </div>

                        @foreach ($carritos as $c )
                       <div class=" mt-3 pt-4 pb-2 px-3 border-b flex ">
                        <div class="w-32 h-28 ">

                            <img src="{{ asset('img/Productos'.$c->options->imagen) }}" class="h-28 object-cover  rounded-sm">
                        </div>
                        <div class=" w-full px-2">
                            <p class=" font-semibold text-xl ">
                                {{ $c->name }}  -  {{ $c->options->precio}} bs
                            </p>
                            {{-- Extra_Presa,
                $this->Cubiertos,
                $this->Guarniciones, --}}
                            <div class="grid grid-cols-2 pl-3">
                                @if ($c->options->Extra_Presa)
                                    <p class="border-b w-fit"> + {{ $c->options->Extra_Presa}}   9bs </p>
                                @endif
                                @if ($c->options->Cubiertos)
                                <p class="border-b w-fit"> + {{ $c->options->Cubiertos}}  </p>
                                @endif
                                @if ($c->options->Guarniciones)
                                <p class="border-b w-fit"> + {{ $c->options->Guarniciones}} </p>
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
            </div>  <!-- fin de cuadro -->


            {{-- Lado Derecho--}}
            <div class="pl-5 w-5/12  fixed right-0 ">

                  {{-- cuadro  direcciones de pago --}}
               <div class="border border-gray-200 rounded-lg shadow px-5 py-3 bg-white">

                {{-- diseio de paypa --}}
                <div id="paypal-button-container"></div>



                <div class="border-b mt-3">
                    <button class="bg-yellow-400 w-full p-2 text-lg rounded-lg mb-0.5">Pagar</button>
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
                        <p> 240.00 Bs</p>
                        <p class="border-b w-full pb-1"> 20.00 Bs </p>
                        <p> --</p>
                        <p> -- </p>
                    </div>
                </div>
                <div class="flex justify-between pt-3 pb-2">
                    <p class="text-red-700 font-bold text-xl"> Total del pedido:</p>
                    <p> 280.00 Bs</p>
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




    <!-- Replace "test" with your own sandbox Business account app client ID -->
    <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.client_id') }}&currency=USD"></script>
    <!-- Set up a container element for the button -->

    <script>
      paypal.Buttons({
        // Order is created on the server and the order id is returned
        createOrder() {
          return fetch("/my-server/create-paypal-order", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            // use the "body" param to optionally pass additional order information
            // like product skus and quantities
            body: JSON.stringify({
              cart: [
                {
                  sku: "YOUR_PRODUCT_STOCK_KEEPING_UNIT",
                  quantity: "YOUR_PRODUCT_QUANTITY",
                },
              ],
            }),
          })
          .then((response) => response.json())
          .then((order) => order.id);
        },
        // Finalize the transaction on the server after payer approval
        onApprove(data) {
          return fetch("/my-server/capture-paypal-order", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify({
              orderID: data.orderID
            })
          })
          .then((response) => response.json())
          .then((orderData) => {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  window.location.href = 'thank_you.html';
          });
        }
      }).render('#paypal-button-container');
    </script>


@endsection
