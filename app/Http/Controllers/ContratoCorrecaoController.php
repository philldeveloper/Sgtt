<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContratoCorrecao;
use App\Contrato_sr;

class ContratoCorrecaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cc = ContratoCorrecao::all();

        return view('contratos.correcoes.index', compact('cc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('contratos.correcoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cc = new ContratoCorrecao;

        $cc->correcoes = $request->correcoes;
        $cc->contrato_sr_id = $request->contrato_sr_id;      
        $cc->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cc = ContratoCorrecao::find($id);

        $contratos_sr = Contrato_sr::find($id);

        return view('contratos.correcoes.show', compact('cc', 'contratos_sr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cc = ContratoCorrecao::find($id);

        return view('contratos.correcoes.edit', compact('cc'));
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
        $cc = ContratoCorrecao::find($id); //localizar contrato find (encontrar)
        $cc->fill ($request->all()); //fill (preencher)
        $cc->save();

        $cc = ContratoCorrecao::all();

        return view('admin.index', compact('cc'))->with('success','Corrections updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cc = ContratoCorrecao::find ($id);
        
        $cc->delete();

        return redirect()->back()->with('success','Corrections deleted successfully');
    }
}
