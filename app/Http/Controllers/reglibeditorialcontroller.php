<?php

namespace App\Http\Controllers;
use App\Models\categorias;
use App\Models\editoriales;
use App\Models\autores;
use Illuminate\Http\Request;

class reglibeditorialcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aggedit=editoriales::all();
        $categoria=categorias::all();
        $autores=autores::all();

<<<<<<< HEAD
        return view("libros.FormLibros",compact("aggedit","categoria","autores",));
=======
        return view("libros.FormLibros",compact("aggedit","categoria","autores"));
>>>>>>> bd2ab97ca412bbf4dc6b9a3eaf86bafddd4825e7

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("editoriales.aggeditlib");
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
            "nombre_editorial"=>"required|min:3|max:100",
            ],[],["name"=>"nombre","content"=>"contenido"]);


        Editoriales::create(['nombre_editorial'=>$request->nombre_editorial,]);
        //dd($request);
        return redirect()->route('Libros.FormLibros');
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
    public function edit(editoriales $editoriale)
    {
        return view("libros.FormLibros",compact("editoriale"));
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
