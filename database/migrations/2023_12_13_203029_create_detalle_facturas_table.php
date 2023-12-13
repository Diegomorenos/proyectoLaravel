<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('factura');
            $table->foreign('factura')->references('id')->on('facturas');
            $table->unsignedBigInteger('reserva');
            $table->foreign('reserva')->references('id')->on('reservas');
            $table->unsignedBigInteger('servicio');
            $table->foreign('servicio')->references('id')->on('servicios');
            $table->unsignedBigInteger('producto');
            $table->foreign('producto')->references('id')->on('productos');
            $table->integer('cantidad');
            $table->float('valor',8,2);
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
        Schema::dropIfExists('detalle_facturas');
    }
};
