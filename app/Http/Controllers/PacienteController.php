<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paciente=Paciente::all();
        return view('novoPaciente',compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('novoPaciente');
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
           'nome'=>'required'
       

        ]);

        Paciente::create($request->all());

        return redirect()->route('paciente.index')->with('success','Paciente registado com sucesso');
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
        $paciente=Paciente::findOrFail($id);
        return view('novoPaciente',compact('paciente'));
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
        $paciente=Paciente::findOrFail($id);
        return view('novoPaciente',compact('paciente'));
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
        {
        $request->validate([
           'nome'=>'required',
           'genero'=>'required',
           'data_nasc'=>'required',
           'altura'=>'required',
           'peso'=>'required',
           'contacto'=>'required',
           'bi'=>'required',
           'grupo_sanguineo'=>'required'
        ]);
        Paciente::findOrFail($id)->update($request->all());
        return redirect()->route('novoPaciente')->with('success','Paciente editado com sucesso');
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
        //

        Paciente::findOrFail($id)->delete();
        return redirect()->route('paciente.index')->with('success','Paciente Removido');
    }
}
