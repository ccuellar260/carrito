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
        Schema::create('direccions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('numero')->nullable();
            $table->string('direccion');
            $table->string('sub_direccion')->nullable();
            $table->string('predeterminado')->default('no');
            $table->string('entrega')->nullable();
            $table->string('latitud')->default('0');
            $table->string('longitud')->default('0');
            $table->unsignedBigInteger('id_user');

            $table->foreign('id_user')
            ->references('id')
            ->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direccions');
    }
};
