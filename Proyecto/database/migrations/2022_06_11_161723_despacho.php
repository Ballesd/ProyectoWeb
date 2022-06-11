<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Despacho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despacho', function (Blueprint $table) {
            $table->id();

            $table->string('salida');
            $table->string('cantidad_salida');
            $table->date('fecha_salida');
            $table->unsignedBigInteger('ref_inve');

            $table->timestamps();
            
            $table->foreign('ref_inve')->references('id')->on('inventario');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('despacho');
    }
}
