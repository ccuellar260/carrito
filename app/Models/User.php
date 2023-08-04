<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Laravel\Cashier\Billable; //stripe
use function Illuminate\Events\queueable; //stripe, mantener registrado el cliente, actualizacion

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    // public $timestamps = false;  //desabilitar la hoar yfecha

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //stripe = actualizacion del cliente
    protected static function booted(): void
    {
        static::updated(queueable(function (User $customer) {
            if ($customer->hasStripeId()) {
                $customer->syncStripeCustomerDetails();
            }
        }));
    }



    public function carritos(){
        //dar mi primari keya productos
        return $this->hasMany(Carrito::class);
    }

    public function direcciones(){
        //dar mi primari keya productos
        return $this->hasMany(Direccion::class);
    }

    public function pedidos(){
        return $this->hasMany(Pedido::class,'id_cliente');
    }
}
