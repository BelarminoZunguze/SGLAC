<?php

namespace App\Http\Controllers;

use App\ExameRequisitado_model;
use Illuminate\Http\Request;

class ExameRequisitadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $exameRequisitados=ExameRequisitado_model::all();
        return view('templates.index',compact('exameRequisitados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('templates.requisicao');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        ExameRequisitado_model::create($request->all());
        return redirect()->route('exameRequisitados.index')->with('success','Exame criao com sucesso');
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
        $exameRequisitados=ExameRequisitado_model::findOrFail($id);
        return view('templates.show',compact('exameRequisitados'));
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
        $exameRequisitado=ExameRequisitado_model::findOrFail($id);
        return view('templates.edit',compact('exameRequisitado'));
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
       
     
        ExameRequisitado_model::findOrFail($id)->update($request->all());
        return redirect()->route('exameRequisitados.index')->with('success','Exame editado com sucesso');
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

        ExameRequisitado_model::findOrFail($id)->delete();
        return redirect()->route('exameRequisitados.index')->with('success','Exame apagado com sucesso');
    }

    public function search(Request $request){
        $exameRequisitados = ExameRequisitado_model::find($request->input('search'));
        return view('templates.index', compact('exameRequisitados'));

    }
}
