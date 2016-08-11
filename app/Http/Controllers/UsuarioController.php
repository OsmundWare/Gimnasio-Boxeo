<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use DB;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioCreateRequest;
use Illuminate\Support\Facades\Session;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $usuarios = DB::table('usuarios')
        ->select('usuarios.*')
        ->paginate(10);
        return view('usuario.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Usuario::create([
            'rut_usuario' => $request['rut'],
            'nombre_usuario'=> $request['nombre'],
            'apellido_paterno_usuario' => $request['apellido_paterno'],
            'apellido_materno_usuario'=> $request['apellido_materno'],
            'direccion_usuario'=> $request['direccion'],
            'comuna_usuario'=> $request['comuna'],
            'telefono_usuario' => $request['telefono'],
            'correo_usuario'=> $request['correo'],
            'fecha_nacimiento_usuario' => $request['fecha'],
            'genero_usuario'=> $request['genero'],
            'certificado_medico_usuario'=> $request['certificado'],
            'imagen_perfil_usuario'=> $request['imagen'],
            'perfil_usuario' => $request['perfil'],
            'password'=> bcrypt($request['password']),     //encripta la password

        ]);

        return redirect()->to('usuario/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('usuario.ver',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuario.editar', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $usuario = Usuario::find($id);
        $usuario->rut_usuario = $request->input('rut');
        $usuario->nombre_usuario = $request->input('nombre');
        $usuario->apellido_paterno_usuario = $request->input('apellido_paterno');
        $usuario->apellido_materno_usuario = $request->input('apellido_materno');
        $usuario->direccion_usuario = $request->input('direccion');
        $usuario->telefono_usuario = $request->input('telefono');
        $usuario->correo_usuario = $request->input('correo');
        $usuario->fecha_nacimiento_usuario = $request->input('fecha');
        $usuario->genero_usuario = $request->input('genero');
        $usuario->perfil_usuario = $request->input('perfil');
        $usuario->password = $request->input('password');

        $exito = $usuario->save();
        if($exito){
            return redirect()->to('usuario/'.$usuario->id_usuario);
        } else {
            return "error";
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Usuario::find($id);
        $user->delete();
        Session::flash('mensaje','Usuario eliminado correctamente');
        return redirect()->to('usuario/index');
    }
}
