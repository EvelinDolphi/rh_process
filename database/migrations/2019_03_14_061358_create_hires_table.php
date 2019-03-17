<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            // $table->integer('salary_id')->unsigned();
            // $table->foreign('salary_id')->references('id')->on('salaries');
            // $table->integer('place_id')->unsigned();
            // $table->foreign('place_id')->references('id')->on('places');
            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')->references('id')->on('employees');
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
        Schema::dropIfExists('hires');
    }
}
