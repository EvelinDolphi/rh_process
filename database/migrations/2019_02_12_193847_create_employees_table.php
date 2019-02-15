

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
            $table->string('name', 40);
            $table->string('first_lastname', 20);
            $table->string('second_lastname', 20);
            $table->datetime('fecha_alta');
            $table->datetime('antiguedad');
            $table->string('sexo', 10);
            $table->datetime('birthdate');
            $table->string('numero_seguro', 15);
            $table->string('curp', 35);
            $table->string('rfc', 35);
            // $table->integer('civil_status_id')->unsigned();
            // $table->foreign('civil_status_id')->references('id')->on('civil_statuses');
            // $table->integer('adress_id')->unsigned();
            // $table->foreign('adress_id')->references('id')->on('adresses');
            // $table->integer('status_id')->unsigned();
            // $table->foreign('status_id')->references('id')->on('statuses');
            // $table->integer('hiring_id')->unsigned();
            // $table->foreign('hiring_id')->references('id')->on('hirings');
            // $table->integer('emergency__contact_id')->unsigned();
            // $table->foreign('emergency__contact_id')->references('id')->on('emergency__contacts');
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
        Schema::dropIfExists('employees');
    }
}
