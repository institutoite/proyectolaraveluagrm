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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('telefono', 10);
            $table->string('correo', 64);
            $table->string('direccion', 150);
            $table->string('genero',20);
            $table->date('fechanacimiento');
            $table->string('carnet',15);

            $table->string('foto',50)->nullable();

            $table->bigInteger('turno_id')->unsigned();
            $table->foreign('turno_id')
            ->references('id')->on('turnos');
            
            $table->bigInteger('profesion_id')->unsigned();
            $table->foreign('profesion_id')
            ->references('id')->on('profesions');

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
        Schema::dropIfExists('empleados');
    }
};
