<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Contrato_sr;
use App\Contrato_cr;
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
        
        //$contrato_sr = Contrato_sr::create($request->all());

        //$contrato_sr->fill(['user_id' => '10']);
        
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

        $contrato_sr->clausula_edit_2_3 = $request->clausula_edit_2_3;
        $contrato_sr->clausula_edit_2_4 = $request->clausula_edit_2_4;
        $contrato_sr->clausula_edit_2_5 = $request->clausula_edit_2_5;
        $contrato_sr->clausula_edit_2_6 = $request->clausula_edit_2_6;

        $contrato_sr->nome_coordenador_ict = $request->nome_coordenador_ict;

        $contrato_sr->clausula_edit_3_1_b = $request->clausula_edit_3_1_b;
        $contrato_sr->clausula_edit_3_1_c = $request->clausula_edit_3_1_c;

        $contrato_sr->nome_coordenador_privado = $request->nome_coordenador_privado;

        $contrato_sr->clausula_edit_3_1_2_c = $request->clausula_edit_3_1_2_c;
        $contrato_sr->clausula_edit_3_3 = $request->clausula_edit_3_3;

        $contrato_sr->clausula_edit_5_1 = $request->clausula_edit_5_1;
        $contrato_sr->clausula_edit_5_2 = $request->clausula_edit_5_2;
        $contrato_sr->clausula_edit_5_3 = $request->clausula_edit_5_3;
        $contrato_sr->clausula_edit_5_4 = $request->clausula_edit_5_4;
        $contrato_sr->clausula_edit_5_5 = $request->clausula_edit_5_5;
        $contrato_sr->clausula_edit_5_6 = $request->clausula_edit_5_6;
        $contrato_sr->clausula_edit_5_7 = $request->clausula_edit_5_7;
        $contrato_sr->clausula_edit_5_8 = $request->clausula_edit_5_8;
        $contrato_sr->clausula_edit_5_9 = $request->clausula_edit_5_9;
        $contrato_sr->clausula_edit_5_10 = $request->clausula_edit_5_10;
        $contrato_sr->clausula_edit_5_11 = $request->clausula_edit_5_11;
        $contrato_sr->clausula_edit_5_12 = $request->clausula_edit_5_12;
        $contrato_sr->clausula_edit_5_13 = $request->clausula_edit_5_13;

        $contrato_sr->clausula_edit_7_6 = $request->clausula_edit_7_6;
        $contrato_sr->clausula_edit_7_7 = $request->clausula_edit_7_7;
        $contrato_sr->clausula_edit_7_8 = $request->clausula_edit_7_8;

        $contrato_sr->clausula_edit_8_1 = $request->clausula_edit_8_1;
        $contrato_sr->clausula_edit_8_2 = $request->clausula_edit_8_2;
        $contrato_sr->clausula_edit_8_2_a = $request->clausula_edit_8_2_a;
        $contrato_sr->clausula_edit_8_2_b = $request->clausula_edit_8_2_b;
        $contrato_sr->clausula_edit_8_2_c = $request->clausula_edit_8_2_c;
        $contrato_sr->clausula_edit_8_2_d = $request->clausula_edit_8_2_d;
        $contrato_sr->clausula_edit_8_2_e = $request->clausula_edit_8_2_e;

        $contrato_sr->prazo_vigencia = $request->prazo_vigencia;

        $contrato_sr->clausula_edit_12_a = $request->clausula_edit_12_a;
        $contrato_sr->clausula_prazo_12_b = $request->clausula_prazo_12_b;

        $contrato_sr->clausula_edit_13_2 = $request->clausula_edit_13_2;
        $contrato_sr->clausula_edit_13_2_1 = $request->clausula_edit_13_2_1;
        $contrato_sr->clausula_edit_13_2_2 = $request->clausula_edit_13_2_2;
        $contrato_sr->clausula_edit_13_3 = $request->clausula_edit_13_3;
        
        $contrato_sr->parceiro_contato_endereco = $request->parceiro_contato_endereco;
        $contrato_sr->parceiro_contato_telefone = $request->parceiro_contato_telefone;
        $contrato_sr->parceiro_contato_celular = $request->parceiro_contato_celular;
        $contrato_sr->parceiro_contato_email = $request->parceiro_contato_email;

        $contrato_sr->privado_contato_endereco = $request->privado_contato_endereco;
        $contrato_sr->privado_contato_telefone = $request->privado_contato_telefone;
        $contrato_sr->privado_contato_celular = $request->privado_contato_celular;
        $contrato_sr->privado_contato_email = $request->privado_contato_email;
        
        $contrato_sr->estado_foro = $request->estado_foro;
        $contrato_sr->cidade_foro = $request->cidade_foro;
        $contrato_sr->data_foro = $request->data_foro;
        $contrato_sr->ict_inst_foro = $request->ict_inst_foro;
        $contrato_sr->nome_rep_foro = $request->nome_rep_foro;
        $contrato_sr->cargo_rep_foro = $request->cargo_rep_foro;

        $contrato_sr->nome_inst_privado_foro = $request->nome_inst_privado_foro;
        $contrato_sr->nome_rep_privado_foro = $request->nome_rep_privado_foro;
        $contrato_sr->cargo_rep_privado_foro = $request->cargo_rep_privado_foro;

        $contrato_sr->nome_testemunha_1 = $request->nome_testemunha_1;
        $contrato_sr->nome_testemunha_2 = $request->nome_testemunha_2;

        $contrato_sr->tipo = $request->tipo;
        $contrato_sr->user_id = Auth::id();      
        
        $contrato_sr->save();

        // return redirect('contrato_sr')
        // ->with('stepCount', $request->stepCount);

        return redirect()->action('HomeController@index')->with('status', 'Contrato criado com sucesso!');
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

        return redirect()->back()->with('status_edit', 'Contrato Editado com sucesso!');
        // return redirect()->action('HomeController@index')->with('status', 'Contrato Editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (Auth::user()->admin == 0)
        //     return abort (403);

        $contratos_sr = Contrato_sr::find ($id);
        
        $contratos_sr->delete();

        return redirect()->back()->with('status','Contrato Deletado com sucesso.');
    }


     public function contrato_correcoes($id){

          $contratos_sr = Contrato_sr::find($id);

       return view('contratos.tt.semrepasse.mostracorrecoes', compact('contratos_sr'));

    }
}
