<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use App\Usuario;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = DB::table('horarios')
            ->select('horarios.*','usuarios.rut_usuario','usuarios.nombre_usuario')
            ->join('usuarios','usuarios.id_usuario','=','horarios.id_usuario')
            ->orderBy('fecha_horario', 'asc')
            ->paginate(10);

        return view('horario.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nombre = Usuario::lists('nombre_usuario', 'id_usuario');
        $rut = Usuario::lists('rut_usuario', 'id_usuario');
        return view('horario.crear',compact('nombre','rut'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Horario::create([
            'asistio_horario'=> $request['asistio'],
            'id_usuario'=> $request['rut_usuario'],
            'hora_ingreso_horario'=> $request['hora_ingreso'],
            'hora_salida_horario' => $request['hora_salida'],
            'fecha_horario' => $request['fecha'],
        ]);

        return redirect()->to('horario/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
