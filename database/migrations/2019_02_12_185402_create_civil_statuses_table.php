<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCivilStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('civil_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('soltero', 10)->nullable($value = true);
            $table->string('casado', 10)->nullable($value = true);
            $table->string('viudo', 10)->nullable($value = true);
            $table->string('divorciado', 10)->nullable($value = true);
            $table->string('separado', 10)->nullable($value = true);
            $table->string('numero_hijos', 10)->nullable($value = true);
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
        Schema::dropIfExists('civil__statuses');
    }
}
