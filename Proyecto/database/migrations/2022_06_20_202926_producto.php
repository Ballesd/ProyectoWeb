<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();

            $table->string('cod_prod')->unique();
            $table->string('descripcion');
            $table->float('precio');
            $table->integer('unidad');
            $table->unsignedBigInteger('id_inv');

            $table->timestamps();
            
            $table->foreign('id_inv')->references('id')->on('compañias');
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
