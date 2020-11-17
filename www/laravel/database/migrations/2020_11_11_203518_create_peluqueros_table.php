<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeluquerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peluqueros', function (Blueprint $table) {
            $table->id();
            $table->integer('cuil')->unique();
            $table->string('apellido');
            $table->string('nombre');
            $table->integer('NumeroEmpleado')->unique();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peluqueros');
    }
}
