<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Contrato_sr;
use Auth;


class Contrato_srController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $contratos_sr = Contrato_sr::all();

        return view('contratos.tt.semrepasse.index', compact('contratos_sr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('contratos.tt.semrepasse.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $contrato_sr = new Contrato_sr;

        $contrato_sr->nome_ict = $request->nome_ict;
        $contrato_sr->nome_parceiro = $request->nome_parceiro;
        $contrato_sr->nome_teste = $request->nome_teste; 
        $contrato_sr->nat_juridica = $request->nat_juridica;
        $contrato_sr->cnpj = $request->cnpj;
        $contrato_sr->endereco = $request->endereco;
        $contrato_sr->cidade = $request->cidade;
        $contrato_sr->uf = $request->uf;
        $contrato_sr->cep = $request->cep;
        $contrato_sr->rep_legal = $request->rep_legal;
        $contrato_sr->cpf = $request->cpf;
        $contrato_sr->rg = $request->rg;
        $contrato_sr->orgao_exp = $request->orgao_exp;
        $contrato_sr->nacionalidade = $request->nacionalidade;
        $contrato_sr->est_civil = $request->est_civil;
        $contrato_sr->ato_nomeacao = $request->ato_nomeacao;
        $contrato_sr->doravante_denominado = $request->doravante_denominado;
        $contrato_sr->nome_parceiro_instituicao = $request->nome_parceiro_instituicao;
        $contrato_sr->parceiro_nat_juridica = $request->parceiro_nat_juridica;
        $contrato_sr->parceiro_cnpj = $request->parceiro_cnpj;
        $contrato_sr->parceiro_endereco = $request->parceiro_endereco;
        $contrato_sr->parceiro_cidade = $request->parceiro_cidade;
        $contrato_sr->parceiro_uf = $request->parceiro_uf;
        $contrato_sr->parceiro_cep = $request->parceiro_cep;
        $contrato_sr->parceiro_rep_legal = $request->parceiro_rep_legal;
        $contrato_sr->parceiro_cpf = $request->parceiro_cpf;
        $contrato_sr->parceiro_rg = $request->parceiro_rg;
        $contrato_sr->parceiro_orgao_exp = $request->parceiro_orgao_exp;
        $contrato_sr->parceiro_cargo = $request->parceiro_cargo;
        $contrato_sr->clausula_descricao = $request->clausula_descricao;
        $contrato_sr->clausula_objetivo = $request->clausula_objetivo;
        $contrato_sr->nome_inst_ict = $request->nome_inst_ict;
        $contrato_sr->nome_inst_privado = $request->nome_inst_privado;
        $contrato_sr->nome_inst_fundacao = $request->nome_inst_fundacao;
        $contrato_sr->nome_empresa_parceira = $request->nome_empresa_parceira;
        $contrato_sr->nome_ict_parceira = $request->nome_ict_parceira;
        $contrato_sr->prazo_vigencia = $request->prazo_vigencia;
        $contrato_sr->estado_foro = $request->estado_foro;
        $contrato_sr->cidade_foro = $request->cidade_foro;
        $contrato_sr->cidade_uf_dia_foro = $request->cidade_uf_dia_foro;
        $contrato_sr->ict_inst_foro = $request->ict_inst_foro;
        $contrato_sr->nome_rep_foro = $request->nome_rep_foro;
        $contrato_sr->cargo_rep_foro = $request->cargo_rep_foro;
        $contrato_sr->nome_inst_privado_foro = $request->nome_inst_privado_foro;
        $contrato_sr->nome_rep_privado_foro = $request->nome_rep_privado_foro;
        $contrato_sr->cargo_rep_privado_foro = $request->cargo_rep_privado_foro;

        $contrato_sr->user_id = Auth::id();      
        
        $contrato_sr->save();

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
        $contratos_sr = Contrato_sr::find($id);

        return view('contratos.tt.semrepasse.show', compact('contratos_sr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*if (Auth::user()-> admin == 0)
            return abort (403);*/

        $contratos_sr = Contrato_sr::find($id);

        return view('contratos.tt.semrepasse.edit', compact('contratos_sr'));
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
        $contratos_sr = Contrato_sr::find($id); //localizar contrato find (encontrar)
        $contratos_sr->fill ($request->all()); //fill (preencher)
        $contratos_sr->save();

        if(Auth::user()->admin == 1){

            $contratos_sr = Contrato_sr::all();

            return view('admin.index', compact('contratos_sr'))
            ->with('success','Product updated successfully');;
        }else{
            
            $contratos_sr = Contrato_sr::all();

            return view('pesquisador.index', compact('contratos_sr'))
            ->with('success','Product updated successfully');
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
        if (Auth::user()->admin == 0)
            return abort (403);

        $contratos_sr = Contrato_sr::find ($id);
        
        $contratos_sr->delete();

        return redirect()->back()
                        ->with('success','Product deleted successfully');
    }
}
