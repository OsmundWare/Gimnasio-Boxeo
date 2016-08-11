<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id_pago');
            $table->integer('id_usuario')->unsigned();
            $table->integer('monto_pago');
            $table->integer('abono_pago');
            $table->date('fecha_pago');
            $table->enum('estado_pago',['cancelado','deuda']);
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
        Schema::drop('pagos');
    }
}
