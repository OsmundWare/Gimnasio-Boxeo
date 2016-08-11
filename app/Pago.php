<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table='pagos';

    protected $primaryKey='id_pago';

    protected $dates = ['deleted_at'];

    protected $fillable=[
        'id_pago',
        'id_usuario',
        'monto_pago',
        'abono_pago',
        'fecha_pago',
        'estado_pago',
    ];
}
