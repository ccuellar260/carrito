<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Direccion;
use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
//carrito framework
use Gloudemans\Shoppingcart\Facades\Cart;


class PagosController extends Controller
{
    public function index(){

        // dd(auth()->user());
        $subTotal = 0;
        $user = Auth()->user();
        if ($user ){
            // $carritos =  Carrito::where('id_user',$user->id)
            // ->join('productos as p','p.id','=','carritos.id_producto')
            // ->select('carritos.*','p.nombre','p.precio','p.imagen')
            // ->get();
            $carritos =  Cart::content();
            foreach ($carritos as $c) {
                $subTotal =  $subTotal + $c->price;
                // dd($c->options);
            }
            $direcciones = Direccion::where('id_user',$user->id)->get();
            $intent = $user->createSetupIntent();
            $metodos_pago = $user->paymentMethods();
            // dd($metodos_pago);
            return view('VistasPagos.metodosPago',compact('carritos','subTotal','direcciones','intent','metodos_pago'));
        }else {
            return redirect()->route('Login');
        }
  }

  public function pedidos(){
     // dd($pedidos) ;
    return view('VistasPagos.pedidos');
  }

  public function pedidosShow( $pedido){
    // dd($pedido);
    return view('VistasPagos.pedidoShow');
  }




}
