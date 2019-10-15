<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesquisadorController extends Controller
{
    public function index(){
    	return view('pesquisador.index');
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
