@extends('navbar')

@section('Contenido')
@php
    $meses = [ 'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Nobiembre','Diciembre'];
    $tipo_tarjeta = [
        'visa' => '<svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--32-svg" height="32" width="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z" fill="#00579f"></path><g fill="#fff" fill-rule="nonzero"><path d="M13.823 19.876H11.8l1.265-7.736h2.023zm7.334-7.546a5.036 5.036 0 0 0-1.814-.33c-1.998 0-3.405 1.053-3.414 2.56-.016 1.11 1.007 1.728 1.773 2.098.783.379 1.05.626 1.05.963-.009.518-.633.757-1.216.757-.808 0-1.24-.123-1.898-.411l-.267-.124-.283 1.737c.475.213 1.349.403 2.257.411 2.123 0 3.505-1.037 3.521-2.641.008-.881-.532-1.556-1.698-2.107-.708-.354-1.141-.593-1.141-.955.008-.33.366-.667 1.165-.667a3.471 3.471 0 0 1 1.507.297l.183.082zm2.69 4.806.807-2.165c-.008.017.167-.452.266-.74l.142.666s.383 1.852.466 2.239h-1.682zm2.497-4.996h-1.565c-.483 0-.85.14-1.058.642l-3.005 7.094h2.123l.425-1.16h2.597c.059.271.242 1.16.242 1.16h1.873zm-16.234 0-1.982 5.275-.216-1.07c-.366-1.234-1.515-2.575-2.797-3.242l1.815 6.765h2.14l3.18-7.728z"></path><path d="M6.289 12.14H3.033L3 12.297c2.54.641 4.221 2.189 4.912 4.049l-.708-3.556c-.116-.494-.474-.633-.915-.65z"></path></g></g></svg>',
        'mastercard' => '<svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--32-svg" height="32" width="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z" fill="#000"></path><g fill-rule="nonzero"><path d="M13.02 10.505h5.923v10.857H13.02z" fill="#ff5f00"></path><path d="M13.396 15.935a6.944 6.944 0 0 1 2.585-5.43c-2.775-2.224-6.76-1.9-9.156.745s-2.395 6.723 0 9.368 6.38 2.969 9.156.744a6.944 6.944 0 0 1-2.585-5.427z" fill="#eb001b"></path><path d="M26.934 15.935c0 2.643-1.48 5.054-3.81 6.21s-5.105.851-7.143-.783a6.955 6.955 0 0 0 2.587-5.428c0-2.118-.954-4.12-2.587-5.429 2.038-1.633 4.81-1.937 7.142-.782s3.811 3.566 3.811 6.21z" fill="#f79e1b"></path></g></g></svg>',
        'amex' => '<svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--32-svg" height="32" width="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g fill="none" fill-rule="evenodd"><path fill="#0193CE" d="M0 0h32v32H0z"></path><path d="M17.79 18.183h4.29l1.31-1.51 1.44 1.51h1.52l-2.2-2.1 2.21-2.27h-1.52l-1.44 1.51-1.26-1.5H17.8v-.85h4.68l.92 1.18 1.09-1.18h4.05l-3.04 3.11 3.04 2.94h-4.05l-1.1-1.17-.92 1.17h-4.68v-.84zm3.67-.84h-2.53v-.84h2.36v-.83h-2.36v-.84h2.7l1.01 1.26-1.18 1.25zm-14.5 1.68h-3.5l2.97-6.05h2.8l.35.67v-.67h3.5l.7 1.68.7-1.68h3.31v6.05h-2.63v-.84l-.34.84h-2.1l-.35-.84v.84H8.53l-.35-1h-.87l-.35 1zm9.96-.84v-4.37h-1.74l-1.4 3.03-1.41-3.03h-1.74v4.04l-2.1-4.04h-1.4l-2.1 4.37h1.23l.35-1h2.27l.35 1h2.43v-3.36l1.6 3.36h1.05l1.57-3.36v3.36h1.04zm-8.39-1.85-.7-1.85-.87 1.85h1.57z" fill="#FFF"></path></g></svg>',
        'discover' => '<svg class="SVGInline-svg SVGInline--cleaned-svg SVG-svg BrandIcon-svg BrandIcon--size--32-svg" height="32" width="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z" fill="#ebf1f8"></path><path d="M0 0h32v32H0z" fill="#fff"></path><g fill-rule="nonzero"><path d="M30 17.9h-1.068l-1.203-1.53h-.114v1.53h-.871v-3.8h1.286c1.006 0 1.586.4 1.586 1.12 0 .59-.363.97-1.016 1.09zm-1.286-2.65c0-.37-.29-.56-.83-.56h-.27v1.15h.25c.56 0 .85-.2.85-.59zm-5.02-1.15h2.469v.64h-1.597v.85H26.1v.65h-1.535v1.03h1.597v.64h-2.468zm-2.8 3.9-1.887-3.91h.954l1.193 2.56 1.203-2.56h.933L21.382 18h-.466zm-7.891-.01c-1.327 0-2.364-.87-2.364-2 0-1.1 1.057-1.99 2.385-1.99.373 0 .684.07 1.068.23v.88a1.586 1.586 0 0 0-1.089-.43c-.83 0-1.462.58-1.462 1.31 0 .77.622 1.32 1.503 1.32.395 0 .695-.12 1.048-.42v.88c-.394.16-.726.22-1.089.22zm-2.634-1.25c0 .74-.633 1.25-1.545 1.25-.664 0-1.141-.22-1.545-.72l.57-.47c.197.34.529.51.944.51.394 0 .674-.23.674-.53 0-.17-.083-.3-.26-.4a3.693 3.693 0 0 0-.601-.22c-.82-.25-1.1-.52-1.1-1.05 0-.62.602-1.09 1.39-1.09.498 0 .944.15 1.317.43l-.456.5a.97.97 0 0 0-.705-.3c-.373 0-.643.18-.643.42 0 .2.155.31.674.48.996.3 1.286.58 1.286 1.2zM6.086 14.1h.871v3.81h-.871zm-2.8 3.81H2V14.1h1.286c1.41 0 2.385.78 2.385 1.9 0 .57-.29 1.11-.798 1.47-.436.3-.923.44-1.597.44zm1.016-2.86c-.29-.22-.622-.3-1.192-.3h-.24v2.52h.239c.56 0 .912-.1 1.192-.3.301-.24.477-.6.477-.97s-.176-.72-.477-.95z" fill="#000"></path><path d="M16.75 14c-1.1 0-2 .88-2 1.97 0 1.16.86 2.03 2 2.03 1.12 0 2-.88 2-2s-.87-2-2-2z" fill="#f27712"></path></g></g></svg>',
        'JCB' => 'JCB',
        'Diners Club' => 'Diners Club',
        'UnionPay' => 'UnionPay',
    ];
@endphp

<form id="mi_formulario" action="{{ route('Pedidos.store') }}" method="POST">
    @csrf
        <div class="flex mt-20 mx-5 "> <!--  md:flex -->
          
             {{--Lado izquierdo, cuadro  direcciones de envio --}}
            <div class="px-5 py-3 mb-10  w-8/12 border border-gray-200 rounded-lg bg-white  ">
                <div class="w-full mx-auto  font-light ">
                    <h6 class=" w-fit font-bold uppercase  border-b border-gray-600 ">
                        Direccion de envio
                    </h6>
                    {{-- //Direcciones --}}
                    {{-- @dd($direcciones) --}}
                    
                    @foreach ($direcciones as $dir )
                        {{-- @if () --}}
                        <div class="{{ $dir->predeterminado == 'si' ? 'bg-orange-50 border-orange-300':'' }}   border rounded-lg mt-3 p-3 flex">
                            <div class=" pr-2">
                                <input type="radio" name="direccion" value="{{ $dir->id }}" 
                                {{ $dir->predeterminado == 'si' ? 'checked' : '' }}  >
                            </div>
                            <div>
                                <p class="font-medium">
                                    <span class="font-bold"> {{ $dir->nombre }} </span>
                                    {{ $dir->direccion }}
                                </p>
                                <p class="text-sm font-medium"> {{ $dir->entrega }}
                                </p>
                                <div class="text-sm text-teal-600 font-semibold space-x-1">
                                    <a href="">Editar direccion</a> <span
                                        class="text-black text-sm font-normal">|</span> <a href="">Agregar
                                        instrucciones de entrega</a>
                                </div>

                            </div>
                        </div>
                       
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
            <div id="div_pedidos" class="pl-5 px-5  w-4/12 h-[87%] fixed right-0 ">
                  {{-- cuadro  direcciones de pago --}}
               <div class="border overflow-y-auto h-full border-gray-200 rounded-lg shadow px-5 py-3 bg-white">

                {{-- <div id="paypal-button-container"></div> --}}
                <div>
                    {{-- disenio de stripe --}}
                    <div class=" rounded-lg bg-white border border-gray-200 text-gray-800 font-light mb-6">
                        <div class="w-full p-3 border-b border-gray-200">

                            {{-- //poner por defecto la predetermainda --}}
                            <input type="hidden" id="es_nueva" name="es_nueva" value="false">
                            
                            <h1 class="mb-2 font-semibold flex"> 
                                Metodos de pago:
                                <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png" class="h-6 ml-3">
                                      
                            </h1>

                            {{-- //hacer un foreach de la lista de tarjetas que hay  --}}
                            @foreach ($metodos_pago as $metodo )
                                <div class="mb-2 mx-3 ">
                                    <label for="tarjeta_1" class="flex space-x-3 items-center cursor-pointer  h-10">
                                        <input type="radio"  name="tarjeta" value="{{ $metodo->card->last4 }}" id="tarjeta_1"  checked
                                        class="form-radio h-5 w-5 text-indigo-500">
                                       
                                       <div class="flex flex-col leading-none pr-4">
                                            <span class="font-semibold capitalize flex  justify-between">
                                                {{ $metodo->card->brand }} <span> •••• {{ $metodo->card->last4 }}</span>
                                           </span>
                                           <span>
                                            Vence en {{ $meses[$metodo->card->exp_month] }} del  {{ $metodo->card->exp_year }}
                                       </span>
                                        </div>
                                        @if (array_key_exists($metodo->card->brand, $tipo_tarjeta))
                                        {!! $tipo_tarjeta[$metodo->card->brand] !!}
                                        @else
                                         SVG
                                        @endif
                                        
                                       
                                    </label>
                                </div>
                            @endforeach

                            {{-- <div class="mb-5">
                                <label for="type1" class="flex items-center cursor-pointer">
                                    <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="tarjeta" id="type1" >
                                    <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png" class="h-6 ml-3">
                                </label>
                            </div> --}}
                           <div>
                            <div class="mb-1 mx-3">
                                <label for="tarjeta_nueva" class="flex items-center cursor-pointer">
                                    <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="tarjeta" id="tarjeta_nueva" >
                                    <p class="font-semibold px-2"> Registrar nueva Tarjeta </p>
                                </label>
                            </div>

                            <div id="div_nueva_tarjeta" class=" w-full hidden">                                                     
            
                                <div class="mb-3">
                                    <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">
                                        Nombre en la tarjeta
                                    </label>
                                    <div>
                                        <input id="card-holder-name" class="w-full px-3 py-2 mb-1 border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" 
                                        placeholder="Nombre en la tarjeta" type="text"/>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <label class="text-gray-600 font-semibold text-sm mb-2 ml-1">Numero de tarjeta</label>
                                    <div id="card-element" class="w-full px-3 py-2 mb-1 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors">
                                        <input class="w-full" type="text"/>
                                    </div>
                                    <span id="error_tarjeta" class="text-red-500 font-medium">  </span>
                                </div>
                               
                            
                            </div>
                           </div>

                           @php
                                $miVariable = 'hola puto';
                            @endphp
                           
                        </div>
                        {{-- tipo de pago paypal --}}
                        {{-- <div class="w-full p-3">
                            <label for="type2" class="flex items-center cursor-pointer">
                                <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type" id="type2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" width="80" class="ml-3"/>
                            </label>
                        </div> --}}
                    </div>
                </div>

                

                <p class="w-full  text-xl font-semibold py-2"> Confirmacion del Pedido</p>
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
                <div>
                    {{-- type="submit" --}}
                    <button id="card-button" data-secret="{{ $intent->client_secret }}"  type="button"
                         class=" mt-2 flex w-full justify-center space-x-3 disabled:opacity-40  max-w-xs mx-auto 
                         bg-blue-600 hover:bg-blue-800 focus:bg-blue-800 text-white rounded-lg px-3 py-2 font-semibold">
                         <div id="loading" class="hidden h-5 w-5 bg-red-500 border-t-transparent border-solid animate-spin rounded-full border-white border-4">
                         </div>
                        <span> Realizar Pago</span>      
                    </button>
                </div>
                <div class="border-b mt-3">
                    {{-- <button class="bg-yellow-400 w-full p-2 text-lg rounded-lg mb-0.5">Pagar</button> --}}
                    <p class="text-sm text-center px-5 mb-2"> Al realizar este pedido, aceptas los terminos y condiciones de pollos Kiki</p>
                </div>

               </div>
               
            </div> <!-- din de cuadro -->
        </div>


        {{-- <div class="w-full bg-slate-500 h-14 flex justify-center items-center  text-white text-xl font-bold">
            <p> Aqui puede ir alguna ifniormacin de contacto</p>
        </div>
 --}}


</form>

<script src="https://js.stripe.com/v3/"></script>
<script>
    console.log('hola');
    var miVariable = {!! json_encode($miVariable) !!};
    console.log(miVariable);
    var div_nueva_tarjeta = document.getElementById('div_nueva_tarjeta');
    console.log(div_nueva_tarjeta);
    var tarjeta_nueva = document.getElementById('tarjeta_nueva');
    tarjeta_nueva.addEventListener('change', function() {
        if (this.checked) {
            console.log('abrir modal de create tarjeta'); 
            div_nueva_tarjeta.classList.remove('hidden');
        }
    });

    var tarjeta_1 = document.getElementById('tarjeta_1');
    tarjeta_1.addEventListener('change', function() {
        if (this.checked) {
            console.log('cerrar modal de tarjta create');
            div_nueva_tarjeta.classList.add('hidden');  
        }
    });

  
        const stripe = Stripe("{{ env('STRIPE_KEY') }}");
    
        const elements = stripe.elements();
        const cardElement = elements.create('card');
    
        cardElement.mount('#card-element');
   
   
</script>

<script>
    const cardHolderName = document.getElementById('card-holder-name');
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;
    const loading = document.getElementById('loading');
    
    cardButton.addEventListener('click', async (e) => {


        //verificar si es nueva tarjeta
        if (tarjeta_nueva.checked){
            console.log('es nueva tarjeta');
            //desabilitar el boton
            cardButton.disabled = true;
            cardButton.textContent = 'Procesando...';
            loading.classList.remove('hidden');
        const { 
            setupIntent, 
            error 
        } = await stripe.confirmCardSetup(
            clientSecret, {
                payment_method: {
                    card: cardElement,
                    billing_details: { name: cardHolderName.value }
                }
            }
        );
        //habilitar el boton
        cardButton.disabled = false;
        cardButton.textContent = 'Realizar Pago';
        loading.classList.add('hidden');
    
        if (error) {
            // Display "error.message" to the user...
            document.getElementById('error_tarjeta').textContent = error.message;
        } else {
            // The card has been verified successfully...
            // console.log(setupIntent.payment_method);
            //agregar el payment method id al form
            tarjeta_nueva.value = setupIntent.payment_method;
            // let inputxd = document.querySelector('[name="tarjeta"]');
            // inputxd.value = setupIntent.payment_method;
            console.log(tarjeta_nueva.value);
            //hacer el submit del form
            document.getElementById('es_nueva').value = 'true';
           document.getElementById('mi_formulario').submit();
        }
    }else{
        console.log('no es nueva tarjeta');
        document.getElementById('es_nueva').value = 'false';
        document.getElementById('mi_formulario').submit();
    }
    });
</script>

@endsection
