<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40);
            $table->string('first_lastname', 20);
            $table->string('second_lastname', 20);
            $table->datetime('fecha_alta');
            $table->datetime('antiguedad');
            $table->string('sexo', 10);
            $table->datetime('birthdate');
            $table->string('numero_seguro', 15);
            $table->string('puesto', 35);
            $table->string('departamento', 35);
            // $table->integer('adress_id')->unsigned();
            // $table->foreign('adress_id')->references('id')->on('adresses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
