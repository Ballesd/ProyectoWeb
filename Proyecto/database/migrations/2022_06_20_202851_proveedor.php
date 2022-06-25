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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();

            $table->string('cedula')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->unsignedBigInteger('id_comp');

            $table->timestamps();
            
            $table->foreign('id_comp')->references('id')->on('compañias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
