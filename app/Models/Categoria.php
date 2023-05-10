<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public $timestamps = false;

    //relacines de uno a muchos con productos
    public function categorias(){
        //dar mi primari keya productos
        return $this->hasMany(Producto::class);
    }

}
