<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    public function detalles(){
        return $this->hasMany(DetallePedido::class,'id_pedido');
    }

    public function cliente(){
        return $this->belongsTo(User::class,'id_cliente');
    }

    public function direccion(){
        return $this->belongsTo(Direccion::class,'id_direccion');
    }

    // public function pago(){
    //     return $this->belongsTo(Pago::class,'id_pago');
    // }
}
