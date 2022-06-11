<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Compañia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compañia', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cedula_prov');
            $table->string('nombre_empresa');
            $table->string('ciudad');
            
            $table->timestamps();

            $table->foreign('cedula_prov')->references('id')->on('proveedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compañia');
    }
}
