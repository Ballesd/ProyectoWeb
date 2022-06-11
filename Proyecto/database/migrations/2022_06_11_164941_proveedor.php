<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->id();

            $table->string('cedula')->unique();
            $table->unsignedBigInteger('ref_inve');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');

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
        Schema::dropIfExists('proveedor');
    }
}
