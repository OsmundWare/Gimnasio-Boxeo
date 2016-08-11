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
            $table->increments('id_usuario');
            $table->string('rut_usuario',50)->unique();
            $table->string('nombre_usuario',50);
            $table->string('apellido_paterno_usuario');
            $table->string('apellido_materno_usuario');
            $table->string('direccion_usuario',100);
            $table->string('comuna_usuario',50);
            $table->string('telefono_usuario',50);
            $table->string('correo_usuario')->unique();
            $table->date('fecha_nacimiento_usuario');
            $table->enum('genero_usuario',['masculino','femenino']);
            $table->string('certificado_medico_usuario');
            $table->string('imagen_perfil_usuario');
            $table->enum('perfil_usuario',['administrador','profesor','boxeador']);
            $table->string('password', 60);
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
        Schema::drop('usuarios');
    }
}
