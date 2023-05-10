<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoCaja extends Model
{
    use HasFactory;
    public $timestamps = false;


     //relacines de uno a muchos con productos
     public function producto(){
        //voy recibir la primery key de categoria
        return $this->belongsTo(Producto::class);
    }

    public function tipo_caja(){
        //voy recibir la primery key de categoria
        return $this->belongsTo(TipoCaja::class);
    }


}
