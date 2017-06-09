<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromocionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promociones', function (Blueprint $table) {
            $table->increments('idPromocion')->unique();
            $table->char('nombre', 255);
            $table->bigInteger('precioReal');
            $table->bigInteger('precioOferta');
            $table->integer('ahorro');
            $table->bigInteger('cantVentas');
            $table->char('validez', 15);
            $table->char('imagenusers', 255);
            $table->string('url');
            $table->rememberToken();
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
        Schema::drop('promociones');
    }
}
