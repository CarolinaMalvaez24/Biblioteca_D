<?php

namespace App\Http\Controllers;

use App\Models\editoriales;
use Illuminate\Http\Request;

class EditorialesController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-editorial|crear-editorial|editar-editorial|borrar-editorial', ['only' => ['index']]);
         $this->middleware('permission:crear-editorial', ['only' => ['create','store']]);
         $this->middleware('permission:editar-editorial', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-editorial', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $editorial=editoriales::all();
        return view("editoriales.TableEditoriales",compact("editorial"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("editoriales.FormEditoriales");
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
            "nombre_editorial"=>"required|min:3|max:100|unique:editoriales",
            ],[],["name"=>"nombre","content"=>"contenido"]);


        Editoriales::create(['nombre_editorial'=>$request->nombre_editorial,]);
        //dd($request);
        return redirect()->route('editoriales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\editoriales  $editoriales
     * @return \Illuminate\Http\Response
     */
    public function show(editoriales $editoriales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\editoriales  $editoriales
     * @return \Illuminate\Http\Response
     */
    public function edit(editoriales $editoriale)
    {
        return view("editoriales.updateEditoriales",compact("editoriale"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\editoriales  $editoriales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, editoriales $editoriale)
    {
        $request->validate([
            "nombre_editorial"=>"required|min:3|max:100|unique:editoriales",
            ],[],["name"=>"nombre","content"=>"contenido"]);
        $editoriale->update(['nombre_editorial'=>$request->nombre_editorial]);
        return redirect()->route('editoriales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\editoriales  $editoriales
     * @return \Illuminate\Http\Response
     */
    public function destroy(editoriales $editoriale)
    {
        $editoriale->delete();
        return redirect()->route('editoriales.index');
    }
}
