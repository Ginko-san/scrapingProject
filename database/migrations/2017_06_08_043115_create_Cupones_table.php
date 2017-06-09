<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuponesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupones', function (Blueprint $table) {
            $table->increments('idCupon');
            $table->string('nombre', 300);
            $table->bigInteger('precioReal');
            $table->bigInteger('precioOferta');
            $table->integer('ahorro');
            $table->bigInteger('cantVentas');
            $table->char('validez', 15);
            $table->string('imagen', 300);
            $table->string('url');
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
        Schema::drop('cupones');
    }
}

