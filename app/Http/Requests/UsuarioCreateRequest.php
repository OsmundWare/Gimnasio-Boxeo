<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'rut'=>'required',
            'nombre'=>'required',
            'apellido_materno'=>'required',
            'apellido_paterno'=>'required',
            'correo'=>'required',
            'fecha' => 'required|email',
            'genero'=>'required',
            'certificado'=>'required',
            'perfil'=>'required',
            'password' => 'required',


        ];
    }
}