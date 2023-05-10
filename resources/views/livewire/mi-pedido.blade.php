
<div class="bg-white flex-none fixed w-72 right-4  h-fit border rounded-lg shadow-md py-5 px-3 text-sky-950 ">
    <div class="flex justify-between">
        <p class="font-bold"> Mi pedido</p>
        @if ($carritos )
        <button wire:click='limpiarCarrito'>
            limpiar carrito
        </button>
        @endif
    </div>

    <div class="flex justify-between font-semibold mt-2 mb-1">
        <p>Cantidad </p>
        <p>Nombre </p>
        <p>Precio </p>
        <p>Accion </p>
    </div>
    @if ($carritos )
        {{-- @dd('hay carritos') --}}
        @foreach ($carritos as $cc)
        <div class="flex justify-between border rounded-lg  p-2 mb-2 shadow-md">
            <p> x{{$cc->qty}}  </p>
            <p> {{$cc->name}} </p>
            <p> {{$cc->price }} Bs</p>
            <button wire:click='EliminarUnProd({{$cc->id}})'> X </button>
        </div>
        @endforeach

        <div class="flex flex-row-reverse justify-between px-3 font-semibold mt-3 mb-5 ">
            {{-- <p class=" border-b" wire:model='precio'> Sub-Total:  {{ $precio }} Bs</p> --}}
        </div>


        <div class="justify-center flex ">
            <a href="{{ route('Pagos.index') }}"
                class="bg-red-500 rounded-lg py-1 px-2 text-white border font-semibold border-red-700 shadow-xl ">
                Ir a pagar
            </a>
        </div>

    @else
      <p class="mt-3 font-semibold text-center "> Carrito vacio</p>
    @endif



</div>
