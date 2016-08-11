<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Carbon\Carbon;

class Usuario extends Model implements AuthenticatableContract, AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    protected $table='usuarios';

    protected $primaryKey='id_usuario';

    protected $dates = ['deleted_at'];

    protected $fillable=[
        'id_usuario',
        'nombre_usuario',
        'apellido_paterno_usuario',
        'apellido_materno_usuario',
        'rut_usuario',
        'direccion_usuario',
        'comuna_usuario',
        'telefono_usuario',
        'correo_usuario',
        'perfil_usuario',
        'fecha_nacimiento_usuario',
        'genero_usuario',
        'certificado_medico_usuario',
        'imagen_perfil_usuario',
        'perfil_usuario',
        'password',
    ];

    public function setPathAttribute($imagen)
    {
        dd($imagen);
        if (!empty($imagen)) {
            $this->attributes['path'] = Carbon::now()->second . $imagen->getClientOriginalName();
            $name = Carbon::now()->second . $imagen->getClientOriginalName();
            \Storage::disk('local')->put($name, \File::get($imagen));
        }
    }
}

