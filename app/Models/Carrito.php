<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function user(){
        //voy recibir la primery key de categoria
    return $this->belongsTo(User::class);
    }

    public function producto(){
        //voy recibir la primery key de categoria
    return $this->belongsTo(Producto::class);
    }

}
