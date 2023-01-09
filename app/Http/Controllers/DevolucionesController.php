<?php

namespace App\Http\Controllers;

use App\Models\Devoluciones;
use Illuminate\Http\Request;
use App\Models\estantes;
use Illuminate\Support\Facades\DB;
class DevolucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $devoluciones=devoluciones::all();
        return view('devoluciones.index',compact("devoluciones"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prestamos=estantes::where('users_id',auth()->user()->id)->get();
        
        return view('devoluciones.create',compact('prestamos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $devolucion=Devoluciones::Create($request->all());
        return redirect()->route('devoluciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function show(Devoluciones $devoluciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Devoluciones $devoluciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devoluciones $devoluciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devoluciones $devolucione)
    {
        $devolucione->delete();
        return redirect()->route('devoluciones.index');
    }
}
