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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->integer('cant_hab');
            $table->integer('adultos');
            $table->integer('ninos');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->float('valor',12,2);
            $table->string('documento');
            $table->foreign('documento')->references('documento')->on('users');
            $table->unsignedBigInteger('estado');
            $table->foreign('estado')->references('id')->on('estados');
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
};
