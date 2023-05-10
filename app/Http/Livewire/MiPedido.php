<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Carrito;

//carrito framework
use Gloudemans\Shoppingcart\Facades\Cart;

class MiPedido extends Component
{

    protected $listeners = [ 'aniadirPedido' =>'render']; //cuando escuhe ejecutara el metodo render

    public $precio= 0.0;
    public function limpiarCarrito( ){
        Cart::destroy();
    }

    public function EliminarUnProd($id_ped){
        // $c = Carrito::where('id',$id_ped)->first();
        // if($c){
        //     $c->delete();
        // }

    }

    // public function render()
    // {
    //     $user = Auth()->user();
    //     if( $user){
    //         $carritos =  Carrito::where('id_user',$user->id)
    //         ->join('productos as p','p.id','=','carritos.id_producto')
    //         ->select('carritos.*','p.nombre','p.precio')
    //         ->get();

    //         $this->precio = 0;
    //         foreach ($carritos as $c) {
    //             $c->precio = $c->precio * $c->cantidad;
    //             $this->precio =  $this->precio + $c->precio;
    //         }

    //         return view('livewire.mi-pedido',compact( 'carritos'));

    //     }else{
    //         $carritos = null;
    //         $this->precio = 0;
    //         return view('livewire.mi-pedido',compact( 'carritos'));

    //     };
    // }

    public function render(){
        $carritos = Cart::content();
        // dd( $carrito);
        return view('livewire.mi-pedido',compact('carritos'));
    }

}
