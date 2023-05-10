<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoSelect extends Model
{
    use HasFactory;
    public $timestamps = false;

      //relacines de uno a muchos con productos
      public function producto(){
        //voy recibir la primery key de categoria
        return $this->belongsTo(Producto::class);
    }

    public function tipo_select(){
        //voy recibir la primery key de categoria
        return $this->belongsTo(TipoSelect::class);
    }
}
