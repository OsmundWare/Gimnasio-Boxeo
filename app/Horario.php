<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table='horarios';

    protected $primaryKey='id_horario';

    protected $dates = ['deleted_at'];

    protected $fillable=[
        'id_horario',
        'id_usuario',
        'asistio_horario',
        'hora_ingreso_horario',
        'hora_salida_horario',
        'fecha_horario',
    ];
}
