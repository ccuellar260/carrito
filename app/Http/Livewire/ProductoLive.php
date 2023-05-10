<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductoLive extends Component{

    //cada que se cambie el valor de los atributos o se llama algun metodo se aplicara el modto render 
    public $search ='esto es o que se buscara';
    public $title;
    // public function render(){
    //     dd('hola xd ');
    //     return view('livewire.producto-live');
    // }

    public function render(){

        return view('livewire.producto-live');
    }
}
