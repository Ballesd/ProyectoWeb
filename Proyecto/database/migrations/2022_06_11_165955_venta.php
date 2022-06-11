<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Venta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->id();

            $table->string('nit')->unique();
            $table->unsignedBigInteger('ref_inve');
            $table->unsignedBigInteger('cedula_c');
            $table->unsignedBigInteger('cod_prod');
            $table->integer('cantidad');
            $table->float('valor_total');

            $table->timestamps();
            
            $table->foreign('ref_inve')->references('id')->on('inventario');
            $table->foreign('cedula_c')->references('id')->on('cliente');
            $table->foreign('cod_prod')->references('id')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
}
