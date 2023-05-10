<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carrito;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\ProductoCaja;
use App\Models\ProductoSelect;
use App\Models\SelectOpcion;
use Stripe\Product;

use Gloudemans\Shoppingcart\Facades\Cart;

class AniadirCarritoLive extends Component
{

    public $ii;
    public $id_prod;
    public $Cantidad = 1;
    public $Extra_Presa = null;
    public $Cubiertos = null;
    public $Guarniciones = null;

    public function aniadirCarrito()
    {
        // dd('este el prod: '.$this->ii.' y la cnat: '.$this->cantidad);
        $prod = Producto::where('id', $this->id_prod)->first();

        Cart::add([
            'id' => $prod->id,
            'name' => $prod->nombre,
            'qty' => $this->Cantidad,
            'price' => $prod->precio,
            'weight' => 550,
            'options' => [
                $this->Extra_Presa,
                $this->Cubiertos,
                $this->Guarniciones,
                'precio' =>  $prod->precio,
                'imagen' =>  $prod->imagen,
            ]
        ]);

        //ejevutando un evetno
        $this->emit('aniadirPedido');
        $this->Cantidad = 1;
    }

    public function render()
    {
        // dd($this->id_prod);
        $pp = Producto::where('id', $this->id_prod)->first();

        // dd(ProductoSelect::get());
        $tipoSelect = ProductoSelect::join('tipo_selects as t', 't.id', '=', 'producto_selects.id_select')
            ->where('id_producto', $this->id_prod)->get();
        // $tipoSelect = ProductoSelect::where('id_producto',$this->id_prod)->get();
        $tipoCaja = ProductoCaja::join('tipo_cajas as t', 't.id', '=', 'producto_cajas.id_caja')
            ->where('id_producto', $this->id_prod)->get();
        $opcSelect = SelectOpcion::get();
        return view('livewire.aniadir-carrito-live', compact('pp', 'tipoSelect', 'tipoCaja', 'opcSelect'));
    }
}
