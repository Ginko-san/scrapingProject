<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuponesTable extends Migration
{/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::create('cupones', function (Blueprint $table) {
        $table->increments('id')->unique();
        $table->char('nombre',255);
        $table->bigInteger('precioReal');
        $table->bigInteger('precioOferta');
        $table->integer('ahorro');
        $table->bigInteger('cantVentas');
        $table->char('validez', 15);
        $table->char('imagen', 255);
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
