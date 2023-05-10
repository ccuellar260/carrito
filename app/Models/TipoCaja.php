<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCaja extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function prodcuto_caja(){
        //dar mi primari keya productos
        return $this->hasMany(ProductoCaja::class);
    }
    

}
