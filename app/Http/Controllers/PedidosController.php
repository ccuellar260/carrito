<?php

namespace App\Http\Controllers;

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
}
