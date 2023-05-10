<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectOpcion extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function producto(){
        //dar mi primari keya productos
        return $this->belongsTo(Producto::class);
    }
}
