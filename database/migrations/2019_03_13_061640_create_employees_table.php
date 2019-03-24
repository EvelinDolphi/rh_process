<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_empleado', 4);
            $table->string('name', 40);
            $table->string('first_lastname', 20);
            $table->string('second_lastname', 20);
            $table->datetime('fecha_alta')->nullable($value = true);
            $table->datetime('antiguedad')->nullable($value = true);
            $table->string('sexo', 10)->nullable($value = true);
            $table->datetime('birthdate')->nullable($value = true);
            $table->string('numero_seguro', 15)->nullable($value = true);
            $table->string('curp', 35)->nullable($value = true);
            $table->string('rfc', 35)->nullable($value = true);
            $table->timestamps();

            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
