<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Contrato_cr;
use App\Contrato_sr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class Contrato_crController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $contrato_cr = Contrato_cr::all();

        return view('contratos.tt.repasse.index', compact('contrato_cr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('contratos.tt.repasse.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $contrato_cr = new Contrato_cr;

        $contrato_cr->nome_ict = $request->nome_ict;
        $contrato_cr->nome_parceiro = $request->nome_parceiro;
        $contrato_cr->nome_teste = $request->nome_teste;
        $contrato_cr->nat_juridica = $request->nat_juridica;
        $contrato_cr->cnpj = $request->cnpj;
        $contrato_cr->endereco = $request->endereco;
        $contrato_cr->cidade = $request->cidade;
        $contrato_cr->uf = $request->uf;
        $contrato_cr->cep = $request->cep;
        $contrato_cr->rep_legal = $request->rep_legal;
        $contrato_cr->cpf = $request->cpf;
        $contrato_cr->rg = $request->rg;
        $contrato_cr->orgao_exp = $request->orgao_exp;
        $contrato_cr->nacionalidade = $request->nacionalidade;
        $contrato_cr->est_civil = $request->est_civil;
        $contrato_cr->ato_nomeacao = $request->ato_nomeacao;
        $contrato_cr->doravante_denominado = $request->doravante_denominado;
        $contrato_cr->nome_parceiro_instituicao = $request->nome_parceiro_instituicao;
        $contrato_cr->parceiro_nat_juridica = $request->parceiro_nat_juridica;
        $contrato_cr->parceiro_cnpj = $request->parceiro_cnpj;
        $contrato_cr->parceiro_endereco = $request->parceiro_endereco;
        $contrato_cr->parceiro_cidade = $request->parceiro_cidade;
        $contrato_cr->parceiro_uf = $request->parceiro_uf;
        $contrato_cr->parceiro_cep = $request->parceiro_cep;
        $contrato_cr->parceiro_rep_legal = $request->parceiro_rep_legal;
        $contrato_cr->parceiro_cpf = $request->parceiro_cpf;
        $contrato_cr->parceiro_rg = $request->parceiro_rg;
        $contrato_cr->parceiro_orgao_exp = $request->parceiro_orgao_exp;
        $contrato_cr->parceiro_cargo = $request->parceiro_cargo;
        $contrato_cr->parceiro_doravante_denominado = $request->parceiro_doravante_denominado;
        $contrato_cr->clausula_descricao = $request->clausula_descricao;
        $contrato_cr->ict_plano_trabalho = $request->ict_plano_trabalho;

        $contrato_cr->clausula_edit_2_3 = $request->clausula_edit_2_3;
        $contrato_cr->clausula_edit_2_4 = $request->clausula_edit_2_4;
        $contrato_cr->clausula_edit_2_5 = $request->clausula_edit_2_5;
        $contrato_cr->clausula_edit_2_6 = $request->clausula_edit_2_6;

        $contrato_cr->clausula_edit_3a = $request->clausula_edit_3a;
        $contrato_cr->clausula_edit_3b = $request->clausula_edit_3b;
        $contrato_cr->clausula_edit_3c = $request->clausula_edit_3c;
        $contrato_cr->clausula_edit_3d = $request->clausula_edit_3d;
        $contrato_cr->clausula_edit_3e = $request->clausula_edit_3e;
        $contrato_cr->clausula_edit_3f = $request->clausula_edit_3f;
        $contrato_cr->clausula_edit_3g = $request->clausula_edit_3g;
        $contrato_cr->clausula_edit_3h = $request->clausula_edit_3h;
        $contrato_cr->clausula_edit_3i = $request->clausula_edit_3i;
        $contrato_cr->clausula_edit_3k = $request->clausula_edit_3k;
        $contrato_cr->clausula_edit_3j = $request->clausula_edit_3j;
        $contrato_cr->clausula_edit_3l = $request->clausula_edit_3l;
        $contrato_cr->clausula_edit_3m = $request->clausula_edit_3c;
        $contrato_cr->clausula_edit_3n = $request->clausula_edit_3n;
        $contrato_cr->clausula_edit_3_3 = $request->clausula_edit_3_3;

        $contrato_cr->clausula_edit_4_8 = $request->clausula_edit_4_8;
        $contrato_cr->clausula_opcional_4_6 = $request->clausula_opcional_4_6;


        $contrato_cr->clausula_edit_4_8_1 = $request->clausula_edit_4_8_1;
        $contrato_cr->clausula_edit_4_8_2 = $request->clausula_edit_4_8_2;
        $contrato_cr->clausula_edit_4_9 = $request->clausula_edit_4_9;
        $contrato_cr->clausula_edit_4_9_1 = $request->clausula_edit_4_9_1;
        $contrato_cr->clausula_edit_4_10 = $request->clausula_edit_4_10;

        $contrato_cr->clausula_edit_6_1 = $request->clausula_edit_6_1;
        $contrato_cr->clausula_edit_6_2 = $request->clausula_edit_6_2;
        $contrato_cr->clausula_edit_6_3 = $request->clausula_edit_6_3;
        $contrato_cr->clausula_edit_6_4 = $request->clausula_edit_6_4;
        $contrato_cr->clausula_edit_6_5 = $request->clausula_edit_6_5;
        $contrato_cr->clausula_edit_6_6 = $request->clausula_edit_6_6;
        $contrato_cr->clausula_edit_6_7 = $request->clausula_edit_6_7;
        $contrato_cr->clausula_edit_6_8 = $request->clausula_edit_6_8;
        $contrato_cr->clausula_edit_6_9 = $request->clausula_edit_6_9;
        $contrato_cr->clausula_edit_6_10 = $request->clausula_edit_6_10;
        $contrato_cr->clausula_edit_6_11 = $request->clausula_edit_6_11;
        $contrato_cr->clausula_edit_6_12 = $request->clausula_edit_6_12;
        $contrato_cr->clausula_edit_6_13 = $request->clausula_edit_6_13;
        
        $contrato_cr->clausula_edit_8_6 = $request->clausula_edit_8_6;
        $contrato_cr->clausula_edit_8_7 = $request->clausula_edit_8_7;
        $contrato_cr->clausula_edit_8_8 = $request->clausula_edit_8_8;

        $contrato_cr->clausula_edit_9_1 = $request->clausula_edit_9_1;
        $contrato_cr->clausula_edit_9_2 = $request->clausula_edit_9_2;
        $contrato_cr->clausula_edit_9_3 = $request->clausula_edit_9_3;
        $contrato_cr->clausula_edit_9_4 = $request->clausula_edit_9_4;
        $contrato_cr->clausula_edit_9_a = $request->clausula_edit_9_a;
        $contrato_cr->clausula_edit_9_b = $request->clausula_edit_9_b;
        $contrato_cr->clausula_edit_9_c = $request->clausula_edit_9_c;
        $contrato_cr->clausula_edit_9_d = $request->clausula_edit_9_d;
        $contrato_cr->clausula_edit_9_e = $request->clausula_edit_9_e;

        $contrato_cr->clausula_edit_12_4_1 = $request->clausula_edit_12_4_1;
        $contrato_cr->clausula_edit_12_4_2 = $request->clausula_edit_12_4_2;

        $contrato_cr->clausula_edit_13_2 = $request->clausula_edit_13_2;
        $contrato_cr->clausula_edit_13_a = $request->clausula_edit_13_a;
        $contrato_cr->clausula_edit_13_b = $request->clausula_edit_13_b;

        $contrato_cr->clausula_edit_14_2 = $request->clausula_edit_14_2;
        $contrato_cr->clausula_edit_14_2_1 = $request->clausula_edit_14_2_1;
        $contrato_cr->clausula_edit_14_2_2 = $request->clausula_edit_14_2_2;
        $contrato_cr->clausula_edit_14_3 = $request->clausula_edit_14_3;
        $contrato_cr->clausula_edit_14_4 = $request->clausula_edit_14_4;

        $contrato_cr->clausula_edit_16_1 = $request->clausula_edit_16_1;
        $contrato_cr->clausula_edit_16_2 = $request->clausula_edit_16_2;

        $contrato_cr->nome_inst_ict = $request->nome_inst_ict;
        $contrato_cr->nome_coordenador_ict = $request->nome_coordenador_ict;
        $contrato_cr->nome_coordenador_privado = $request->nome_coordenador_privado;
        $contrato_cr->nome_inst_privado = $request->nome_inst_privado;
        $contrato_cr->nome_inst_fundacao = $request->nome_inst_fundacao;
        $contrato_cr->nome_parceiro_privado = $request->nome_parceiro_privado;
        $contrato_cr->valor_financeiro = $request->valor_financeiro;
        $contrato_cr->nome_fund_apoio = $request->nome_fund_apoio;
        $contrato_cr->prazo_vigencia = $request->prazo_vigencia;
        $contrato_cr->estado_foro = $request->estado_foro;
        $contrato_cr->cidade_foro = $request->cidade_foro;
        $contrato_cr->cidade_uf_dia_foro = $request->cidade_uf_dia_foro;
        $contrato_cr->ict_inst_foro = $request->ict_inst_foro;
        $contrato_cr->nome_rep_foro = $request->nome_rep_foro;
        $contrato_cr->cargo_rep_foro = $request->cargo_rep_foro;
        $contrato_cr->nome_inst_privado_foro = $request->nome_inst_privado_foro;
        $contrato_cr->nome_rep_privado_foro = $request->nome_rep_privado_foro;
        $contrato_cr->cargo_rep_privado_foro = $request->cargo_rep_foro;

        $contrato_cr->tipo = 'Com Repasse';
        
        $contrato_cr->user_id = Auth::id();

        $contrato_cr->save();

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
        $contratos_cr = Contrato_cr::find($id);

        return view('contratos.tt.repasse.show', compact('contratos_cr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contratos_cr = Contrato_cr::find($id);

        return view('contratos.tt.repasse.edit', compact('contratos_cr'));
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
        $request->validate([
            'nome_ict' => 'required|unique:posts|max:255',
            'nome_parceiro' => 'required',
            'nome_teste' => 'required',
            'nat_juridica' => 'required',
            'cnpj' => 'required',
            'endereco' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'cep' => 'required',
            'rep_legal' => 'required',
            'cpf' => 'required',
            'rg' => 'required',
            'orgao_exp' => 'required',
            'nacionalidade' => 'required',
            'est_civil' => 'required',
            'ato_nomeacao' => 'required',
            'doravante_denominado' => 'required',
            'nome_parceiro_instituicao' => 'required',
            'parceiro_nat_juridica' => 'required',
            'parceiro_cnpj' => 'required',
            'parceiro_endereco' => 'required',
            'parceiro_cidade' => 'required',
            'parceiro_uf' => 'required',
            'parceiro_rep_legal' => 'required',
            'parceiro_cep' => 'required',
            'parceiro_cpf' => 'required',
            'parceiro_rg' => 'required',
            'parceiro_orgao_exp' => 'required',
            'parceiro_cargo' => 'required',
            'parceiro_doravante_denominado' => 'required',
            'clausula_descricao' => 'required',
            'ict_plano_trabalho' => 'required',
            
            'nome_coordenador_ict' => 'required',
            'nome_coordenador_privado' => 'required',
            'nome_inst_privado' => 'required',
            'nome_inst_fundacao' => 'required',
            'nome_parceiro_privado' => 'required',
            'nome_fund_apoio' => 'required',
            'prazo_vigencia' => 'required',
            'estado_foro' => 'required',
            'cidade_foro' => 'required',
            'cidade_uf_dia_foro' => 'required',
            'ict_inst_foro' => 'required',
            'nome_rep_foro' => 'required',
            'cargo_rep_foro' => 'required',
            'nome_inst_privado_foro' => 'required',
            'nome_rep_privado_foro' => 'required',
            'cargo_rep_privado_foro' => 'required',
        ]);
    

        $contratos_cr = Contrato_cr::find($id); //localizar contrato find (encontrar)
        $contratos_cr->fill ($request->all()); //fill (preencher)
        $contratos_cr->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $contrato_cr = Contrato_cr::find($id);
        
        $contrato_cr->delete();

        return redirect()->back()
                        ->with('success','Product deleted successfully');
    }
}
