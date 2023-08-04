<?php

namespace App\Http\Livewire;

use App\Models\DetallePedido;
use App\Models\Pedido;
use Livewire\Component;

class VerDetallePedido extends Component
{
    public $pedido_id;


    public function verDetalle($id_pedido)
    {
        $this->pedido_id = $id_pedido;
    }



    public function render()
    {
        $user = auth()->user();
        $pedidos = Pedido::where('id_cliente',$user->id)->get();

        if(is_null($this->pedido_id)){
            $this->pedido_id = $pedidos[0]->id;
        }
        $detalles = DetallePedido::where('id_pedido',$this->pedido_id)->get();
        return view('livewire.ver-detalle-pedido',compact('pedidos', 'detalles'));
    }
}
