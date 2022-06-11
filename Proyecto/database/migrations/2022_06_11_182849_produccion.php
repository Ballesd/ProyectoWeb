<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produccion', function (Blueprint $table) {
            $table->id();

            $table->integer('cantidad');
            $table->time('horas_extra');
            $table->unsignedBigInteger('ced_empleado');

            $table->timestamps();
            $table->foreign('ced_empleado')->references('id')->on('empleado');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produccion');
    }
}
