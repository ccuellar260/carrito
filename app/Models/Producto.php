<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public $timestamps = false;

    //relacines de uno a muchos con productos
    public function categoria(){
        //voy recibir la primery key de categoria
        return $this->belongsTo(Categoria::class);
    }

    public function carritos(){
        //dar mi primari keya productos
        return $this->hasMany(Carrito::class);
    }

    public function producto_select(){
        //dar mi primari keya productos
        return $this->hasMany(ProductoSelect::class);
    }

    public function producto_caja(){
        //dar mi primari keya productos
        return $this->hasMany(ProductoCaja::class);
    }


}
