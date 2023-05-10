<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Hola extends Component
{

    public $acu = '';

    public function render()
    {
        return view('livewire.hola');
    }
}
