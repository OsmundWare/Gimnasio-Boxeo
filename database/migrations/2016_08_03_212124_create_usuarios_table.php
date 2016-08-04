<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('horario_id')->unsigned();
            $table->string('rut',50)->unique();
            $table->string('nombre',50);
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('direccion',100);
            $table->string('comuna',50);
            $table->string('telefono',50);
            $table->string('email')->unique();
            $table->date('fecha_nacimiento');
            $table->enum('sexo',['hombre','mujer']);
            $table->string('certificado_medico');
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('horario_id')
                ->references('id')->on('horarios')
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
        Schema::drop('usuarios');
    }
}
