<?php

namespace App\Http\Livewire;

use App\Models\SelectOpcion;
use App\Models\TipoSelect;
use Livewire\Component;

class TipoOpcionesLive extends Component
{

    public $hola = ['saludos' => 'hola que tal puto!',
                    'chua' => 'adios, puto!!!'];

    // public $opciones = ;
    //variables para live oara selectoes
    //para le ripo de cjaa se ejecutara otro metodo
    public $nombreS;
    public $tipoSelect ='normal';
    public $cantSelect ='unica';


    protected $listeners = ['actualizarOpciones'=>'storeTipoSelect'];


    public function hola(){
        dd('hola');
        // dd($datos );
    }

    //esto sera
    public function storeTipoSelect($opciones){

        $p = new TipoSelect();
        $p->nombre = $this->nombreS;
        $p->tipo = $this->tipoSelect;
        $p->cantidad = $this->cantSelect;
        $p->save();

        foreach ($opciones as $r) {
            $r =  new SelectOpcion();
            $r->nombre = $p;
            $r->precio = 5.0;
            $r->id_tipo_select = $p->id;
            $r->save();
        }
        $this->reset(['nombreS','tipoSelect','cantSelect']);
        // dd('se creo satisfactoriamente');
    }

    public function render()
    {
        // $opcionesSelect = TipoSelect::join('select_opcions as s','s.id_tipo_select','=','tipo_selects.id')
        // ->select('tipo_selects.*','s.nombre as nombreO')
        // ->get();

        $tipoSelects = TipoSelect::get();
        $opcionesSelects = SelectOpcion::get();
        return view('livewire.tipo-opciones-live',compact('tipoSelects','opcionesSelects'));
    }
}
