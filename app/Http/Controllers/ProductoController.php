<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Carrito;
use App\Models\Pedido;
use App\Models\ProductoSelect;
use App\Models\TipoSelect;
use Illuminate\Http\Request;



class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(){
    //     $productos = Producto::get();
    //     return view('VistasProducto.index', compact('productos'));
    // }

    public function index (){
        // $user = Auth()->user();
        $productos = Producto::get();
        $categorias = Categoria::get();
        $pedidos = Pedido::get();

                // dd($carritos);
        return view('VistasProducto.index', compact('productos','categorias','pedidos'));
    }

    public function indexAdmin (){
        // $user = Auth()->user();
        $productos = Producto::get();
        $categorias = Categoria::get();

                // dd('holaaa');
        return view('VistasProducto.indexAdmin', compact('productos','categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('llege');
        $categorias = Categoria::get();
        return view('VistasProducto.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {

        if ($r->hasFile('foto')) {
            $file = $r->file('foto');
            $destino = 'img/Productos/';
            $fotos = time() . '-' . $file->getClientOriginalName();
            $subirImagen = $r->file('foto')->move($destino, $fotos);
        } else {
            $fotos = "pollo.png"; //DEFAUDL
        }



        $p = new Producto();
        $p->nombre= $r->nombre;
        $p->descripcion= $r->descripcion;
        $p->slug= '';
        $p->precio= $r->precio;
        $p->imagen= $fotos;
        $p->id_categoria= $r->categoria;
        $p->save();

        // if($r->tipo == 'on'){ //tipo select
        //     dd('si existe');
        // }else{
        //     //tipo cajaj
        // }

        //el tipo seria select
        foreach ($r->options as $op) {
            // $op = TipoSelect::where('id',$op)->first();
            $x = new ProductoSelect();
            $x->id_producto = $p->id;
            $x->id_select = $op;
            $p->save();
        }

        return redirect()->route('Producto.indexAdmin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function indexCategorias()
    {
        // return view();
    }


}
