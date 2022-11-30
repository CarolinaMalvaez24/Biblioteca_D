<?php

namespace App\Http\Controllers;

use App\Models\consultas;
use Illuminate\Http\Request;
use App\Models\libros;
use App\Models\usuarios;

class ConsultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consulta=consultas::join("usuarios","usuarios.id","=","consultas.id_usuarios")
            ->join("libros","libros.id","=","consultas.id_libros")
            ->select("consultas.id","usuarios.nombreUsuario","libros.descripcion","consultas.fechaConsulta")
            ->orderby("consultas.id")
            ->get();
        
        ///$consulta=consultas::all();
        return view("consultas.TableConsultas",compact("consulta"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios=usuarios::all();
        $libros=libros::all();
        return view("consultas.FormConsultas",compact("usuarios","libros"));
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
            "id_usuarios"=>"required", //buscar su validacion
            "id_libros"=>"required",   //buscar su validacion
            "fechaConsulta"=>"required"
            ],[],["name"=>"nombre","content"=>"contenido"]);

        Consultas::create(['id_usuarios'=>$request->id_usuarios,
                          'id_libros'=>$request->id_libros,
                           'fechaConsulta'=>$request->fechaConsulta,]);
        return redirect()->route('consultas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\consultas  $consultas
     * @return \Illuminate\Http\Response
     */
    public function show(consultas $consultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\consultas  $consultas
     * @return \Illuminate\Http\Response
     */
    public function edit(consultas $consulta)
    {
        $usuarios=usuarios::all();
        $libros=libros::all();
        return view("consultas.updateConsultas",compact("consulta","usuarios","libros"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\consultas  $consultas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, consultas $consulta)
    {
        $request->validate([
            "id_usuarios"=>"required", //buscar su validacion
            "id_libros"=>"required",   //buscar su validacion
            "fechaConsulta"=>"required"
            ],[],["name"=>"nombre","content"=>"contenido"]);

        $consulta->update(['id_usuarios'=>$request->id_usuarios,
                          'id_libros'=>$request->id_libros,
                           'fechaConsulta'=>$request->fechaConsulta,]);
        return redirect()->route('consultas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\consultas  $consultas
     * @return \Illuminate\Http\Response
     */
    public function destroy(consultas $consulta)
    {
        $consulta->delete();
        return redirect()->route("consultas.index");
    }
}
