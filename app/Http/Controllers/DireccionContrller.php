<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use Illuminate\Http\Request;

class DireccionContrller extends Controller
{
    public function index(){
        $direcciones = Direccion::where('id_user',auth()->user()->id)->get();
    //    dd($direcciones);
        return view('VistasDireccion.index',compact('direcciones'));
    }

    public function create()
    {
        // dd('llege');
        return view('VistasDireccion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
// dd($r);
        $p = new Direccion();
        $p->nombre = $r->nombre;
        $p->numero = $r->numero;
        $p->direccion = $r->direccion;
        $p->sub_direccion = $r->sub_direccion;
        $p->predeterminado =$r->preferido ;
        $p->entrega = $r->nota;
        // $p->atitud =$r-> ;
        // $p->longitud = $r->;
        $p->id_user = auth()->user()->id;
        $p->save();
        // dd($r);
        return redirect()->route('Direccion.Index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function cambiarPredeterminado(Direccion $dir)
    {
        // dd($dir);
        $direcciones = Direccion::where('id_user',auth()->user()->id)->get();

        $dir->predeterminado ='si';
        $dir->save();
        foreach ($direcciones as $d) {
            if($d->id != $dir->id){
                $d->predeterminado ='no';
                $d->save();
            }
        }
        // return redirect()->route('Direccion.Index');
        return redirect()->back();
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
}
