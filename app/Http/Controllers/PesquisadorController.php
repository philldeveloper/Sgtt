<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contrato_sr;

use App\Contrato_cr;

use Auth;

class PesquisadorController extends Controller
{
    public function index(){

        $contratos_sr = Contrato_sr::all();
        $contratos_cr = Contrato_cr::all();

    	return view('pesquisador.index', compact('contratos_sr', 'contratos_cr'));
    }

    public function faqindex(){
    	return view('pesquisador.faq.index');
    }

    public function semrepasseindex(){
    	return view('contratos.tt.semrepasse.index');
    }

    public function repasseindex(){
    	return view('contratos.tt.repasse.index');
    }
}
