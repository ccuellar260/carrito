<?php

namespace App\Http\Livewire;

use Livewire\Component;

// use Illuminate\Support\Facades\Auth;

class MetodosPago extends Component{


    public function adicionarMetodoPago($met){
        // Auth()->user()->addPaymentMethod($met);
    }




    public function render()
    {
        //se debe crear u nobjeto intento, que quiere decur que esta por hacer un pago
        // $intento = Auth()->user()->createSetupIntent();
        // return view('livewire.metodos-pago',compact('intento'));
        return view('livewire.metodos-pago');
    }
}
