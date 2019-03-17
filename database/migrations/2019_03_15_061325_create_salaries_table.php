<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->float('salario_base', 8,2)->nullable($value = true);
            $table->float('salario_cotizacion', 8,2)->nullable($value = true);
            $table->float('sueldo_contratacion', 8,2)->nullable($value = true);
            $table->timestamps();

            $table->integer('hire_id')->unsigned();
            $table->foreign('hire_id')->references('id')->on('hires');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
}
