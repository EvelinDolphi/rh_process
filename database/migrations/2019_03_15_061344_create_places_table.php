<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('area', 35);
            $table->string('delegacion', 35);
            $table->timestamps();
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments');
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
        Schema::dropIfExists('places');
    }
}
