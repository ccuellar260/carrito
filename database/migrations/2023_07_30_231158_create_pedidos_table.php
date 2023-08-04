<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_direccion');
            // $table->unsignedBigInteger('id_pago');
            $table->integer('estado')->default(0);
            $table->date('fecha');
            $table->time('hora_pedido');
            $table->time('hora_entrega')->nullable();
            $table->string('observaciones')->nullable();
            $table->decimal('monto_total', 10, 2)->default(0);
            $table->string('descuento')->nullable();
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('id_direccion')->references('id')->on('direccions')->onUpdate('cascade');
            // $table->foreign('id_pago')->references('id')->on('pagos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
