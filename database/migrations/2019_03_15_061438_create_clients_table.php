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
            $table->string('first_lastname', 20)->nullable($value = true);
            $table->string('second_lastname', 20)->nullable($value = true);
            $table->datetime('fecha_alta')->nullable($value = true);
            $table->datetime('antiguedad')->nullable($value = true);
            $table->string('sexo', 10)->nullable($value = true);
            $table->datetime('birthdate')->nullable($value = true);
            $table->string('numero_seguro', 15);
            $table->string('puesto', 35)->nullable($value = true);
            $table->string('departamento', 35)->nullable($value = true);
            $table->string('rfc', 35);
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
