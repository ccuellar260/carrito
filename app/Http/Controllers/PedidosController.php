<?php

namespace App\Http\Controllers;

use App\Models\DetallePedido;
use App\Models\Pedido;
use Illuminate\Http\Request;

//carrito framework
use Gloudemans\Shoppingcart\Facades\Cart;

class PedidosController extends Controller
{
    public function index(){
        $carrito = Cart::content();
// dd(Cart);
        return view('prueba2',compact('carrito'));
    }


    public function add(){
        $c = count(Cart::content())+1;
       // Cart::count();  //cuenta el carrtio
        Cart::add(['id' => $c,
                    'name' => 'Product'.$c,
                    'qty' => 1,
                    'price' => 9.99,
                    'weight' => 550,
                    // 'options' => ['size' => 'large']
                ]);

        return redirect()->route('index');
    }

    public function realizar_pedido(Request $r){

        // dd($r->all());
        // si es nueva tarjeta 
        //guardar tarjeta
        $user = auth()->user();
        if ($r->es_nueva == 'true'){
            $user->addPaymentMethod($r->tarjeta);
        }
        //raliazr el pago 
        



        //guardar pedido
        $pedido = new Pedido();
        $pedido->id_cliente = auth()->user()->id;
        $pedido->id_direccion = $r->direccion;
        $pedido->fecha = date('Y-m-d');
        $pedido->hora_pedido = date('H:i:s');
        $pedido->save();

        $subTotal = 0;
        $carritos =  Cart::content();
        foreach ($carritos as $c) {
            $detalle = new DetallePedido();
            $detalle->id_pedido = $pedido->id;
            $detalle->id_producto = $c->id;
            $detalle->cantidad = $c->qty;
            $detalle->precio = $c->price;
            //hacer descuento
            $detalle->save();

            $subTotal =  $subTotal + $c->price;
        }
        $pedido->monto_total = $subTotal;
        $pedido->save();   

        //limpiar carrito
        Cart::destroy();
        return redirect()->route('Producto.Index');
    }

 
}
