<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function(Blueprint $table){
            $table->increments('id');
            $table->integer('cliente_id')->unsigned()->nullable(false);
            $table->integer('quarto_id')->unsigned()->nullable(false);
            $table->dateTime('data_entrada');
            $table->dateTime('data_saida')->nullable(true);
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
        Schema::dropIfExists('reservas');
    }
}
