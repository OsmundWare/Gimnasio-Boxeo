<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id_horario');
            $table->integer('id_usuario')->unsigned();
            $table->enum('asistio_horario',['si','no']);
            $table->time('hora_ingreso_horario');
            $table->time('hora_salida_horario');
            $table->date('fecha_horario');
            $table->timestamps();

            $table->foreign('id_usuario')
                ->references('id_usuario')->on('usuarios')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('horarios');
    }
}
