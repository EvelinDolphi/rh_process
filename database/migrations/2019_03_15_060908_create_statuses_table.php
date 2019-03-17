<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alta', 2)->nullable($value = true);
            $table->string('baja', 2)->nullable($value = true);
            $table->string('voluntaria', 2)->nullable($value = true);
            $table->string('resicion', 2)->nullable($value = true);
            $table->string('demanda', 2)->nullable($value = true);
            $table->string('penal', 2)->nullable($value = true);
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
        Schema::dropIfExists('statuses');
    }
}
