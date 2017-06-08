<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromocionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('idPromocion')->unique()->primary();
            $table->char('nombre', 300);
            $table->bigInteger('precioReal');
            $table->bigInteger('precioOferta');
            $table->integer('ahorro');
            $table->bigInteger('cantVentas');
            $table->char('validez', 15);
            $table->char('imagenusers', 300);

            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('flights');
    }
}
