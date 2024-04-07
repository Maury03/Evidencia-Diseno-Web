<?php

namespace App\Http\Controllers;

use App\calificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();
        $calificacions = DB::select('select * from calificacions where profesorId = ?', [$userId]);
        return view('registro.index', compact('calificacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userId = Auth::id();
        return view('registro.create', ['userId' => $userId]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'actividad' => 'required|max:75',
            'tipo' => 'required|max:75',
            'calificacion' => 'required|max:3',
            'materiaId' => 'required',
            'estudianteId' => 'required',
            'profesorId' => 'required',
        ]);
        Calificacion::create($validatedData);
        return redirect()->action('RegistroController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\calificacion  $calificacion
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\calificacion  $calificacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calificacion = Calificacion::findOrFail($id);
        $userId = Auth::id();
        return view('registro.edit', ['calificacion' => $calificacion, 'userId' => $userId]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\calificacion  $calificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'actividad' => 'required|max:75',
            'tipo' => 'required|max:75',
            'calificacion' => 'required|max:3',
            'materiaId' => 'required',
            'estudianteId' => 'required',
            'profesorId' => 'required',
        ]);
        Calificacion::whereId($id)->update($validatedData); 
        return redirect()->action('RegistroController@index')->with('success', 'La calificación se ha actualizado'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\calificacion  $calificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $calificacion = Calificacion::findOrFail($id); 
        $calificacion->delete(); 
        return redirect()->action('RegistroController@index')->with('success', 'La calificación se ha borrado'); 

    }
}
