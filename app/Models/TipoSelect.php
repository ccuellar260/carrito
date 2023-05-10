<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSelect extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function prodcuto_select(){
        //dar mi primari keya productos
        return $this->hasMany(ProductoSelect::class);
    }

    public function select_opcions(){
        //voy recibir la primery key de categoria
        return $this->hasMany(ProductoSelect::class);
     }
}
