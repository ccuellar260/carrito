<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;
    public $timestamps = false;

    //relacines de uno a muchos con productos
    public function user(){
        //dar mi primari keya productos
        return $this->belongsTo(User::class);
    }
}
