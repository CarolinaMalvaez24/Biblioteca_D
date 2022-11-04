<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;
use App\Models\tipos;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario=usuarios::all();
        /*
            SELECT
            usuarios.id,
            usuarios.nombre,
            usuarios.apellidoPaterno,
            usuarios.apellidoMaterno,
            usuarios.nombreUsuario,
            usuarios.correo,
            usuarios.contrasena,
            tipos.tipo
            FROM usuarios
            INNER JOIN tipos ON tipos.id=usuarios.id_tipos
            ORDER BY usuarios.id ASC;

            $usuario=usuarios::join("tipos","tipos.id","=","usuarios.id_tipos")
        ->select("usuarios.id","usuarios.nombre","usuarios.apellidoPaterno","usuarios.apellidoMaterno","usuarios.nombreUsuario","usuarios.correo","usuarios.contrasena","tipos.tipo")
        ->orderby("usuarios.id")
        ->get();

        */
        $usuario=usuarios::join("tipos","tipos.id","=","usuarios.id_tipos")
        ->select("usuarios.id","usuarios.nombre","usuarios.apellidoPaterno","usuarios.apellidoMaterno","usuarios.nombreUsuario","usuarios.correo","usuarios.contrasena","tipos.tipo")
        ->orderby("usuarios.id")
        ->get();
        return view("usuarios.TableUsuarios",compact("usuario"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = tipos::all();
        return view("usuarios.FormUsuarios",compact("tipos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "nombre"=>"required",
            "apellidoPaterno"=>"required",
            "apellidoMaterno"=>"required",
            "nombreUsuario"=>"required|min:3|max:20",
            "correo"=>"required",
            "contrasena"=>"required",
            "id_tipos"=>"required", //buscar laa validacion correcta
            ],[],["name"=>"nombre","content"=>"contenido"]);


        Usuarios::create(['nombre'=>$request->nombre,
                        'apellidoPaterno'=>$request->apellidoPaterno,
                        'apellidoMaterno'=>$request->apellidoMaterno,
                        'nombreUsuario'=>$request->nombreUsuario,
                        'correo'=>$request->correo,
                        'contrasena'=>$request->contrasena,
                        'id_tipos'=>$request->id_tipos,]);
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(usuarios $usuario)
    {
        $tipos = tipos::all();
        return view("usuarios.updateUsuarios",compact("usuario","tipos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuarios $usuario)
    {
        $request->validate([
            "nombre"=>"required",
            "apellidoPaterno"=>"required",
            "apellidoMaterno"=>"required",
            "nombreUsuario"=>"required|min:3|max:20",
            "correo"=>"required",
            "contrasena"=>"required",
            "id_tipos"=>"required", //buscar laa validacion correcta
            ],[],["name"=>"nombre","content"=>"contenido"]);

        $usuario->update(['nombre'=>$request->nombre,
                        'apellidoPaterno'=>$request->apellidoPaterno,
                        'apellidoMaterno'=>$request->apellidoMaterno,
                        'nombreUsuario'=>$request->nombreUsuario,
                        'correo'=>$request->correo,
                        'contrasena'=>$request->contrasena,
                        'id_tipos'=>$request->id_tipos,]);
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuarios $usuario)
    {
        $usuario->delete();
        return redirect()->route("usuarios.index");
    }
}
