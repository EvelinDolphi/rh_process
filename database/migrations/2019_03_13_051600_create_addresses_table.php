<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avenue', 50);
            $table->string('lote', 10)->nullable($value = true);
            $table->string('manzana', 10)->nullable($value = true);
            $table->string('number', 6)->nullable($value = true);
            $table->string('street', 50)->nullable($value = true);
            $table->string('colonia', 50);
            $table->string('municipality', 50);
            $table->string('state', 50);
            $table->string('codigo_postal', 5);
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
        Schema::dropIfExists('addresses');
    }
}
