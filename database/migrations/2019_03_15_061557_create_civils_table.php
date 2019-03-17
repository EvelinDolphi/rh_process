<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCivilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('civils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('soltero', 10)->nullable($value = true);
            $table->string('casado', 10)->nullable($value = true);
            $table->string('viudo', 10)->nullable($value = true);
            $table->string('divorciado', 10)->nullable($value = true);
            $table->string('separado', 10)->nullable($value = true);
            $table->string('numero_hijos', 10)->nullable($value = true);
            $table->timestamps();

            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('civils');
    }
}
