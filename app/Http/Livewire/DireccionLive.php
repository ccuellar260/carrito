<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Direccion;

class DireccionLive extends Component
{
    protected $listeners = ['render'];

    public function cambiarDir( $dir)
    {
        $dir = Direccion::where('id',$dir)->first();
        $direcciones = Direccion::where('id_user',auth()->user()->id)->get();
        // dd($dir );
        $dir->predeterminado ='si';
        $dir->save();
        foreach ($direcciones as $d) {
            if($d->id != $dir->id){
                $d->predeterminado ='no';
                $d->save();
            }
        }

    }

    public function render()
    {

        $direccionesXD = Direccion::where('id_user',auth()->user()->id)->get();
        $direccioXD = Direccion::where('id_user',auth()->user()->id)
                                ->where('predeterminado','si')->first();

        return view('livewire.direccion-live',compact('direccionesXD','direccioXD'));
   
    }
}
