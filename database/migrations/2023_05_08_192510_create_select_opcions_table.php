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
        Schema::create('select_opcions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->float('precio')->default(0.0);
            $table->unsignedBigInteger('id_tipo_select');

            $table->foreign('id_tipo_select')
            ->references('id')
            ->on('tipo_selects');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('select_opcions');
    }
};
