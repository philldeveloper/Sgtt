<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResearcherController extends Controller
{
    public function index(){
    	return view('researcher.index');
    }

    public function faqindex(){
    	return view('researcher.faq.index');
    }

    public function semrepasseindex(){
    	return view('contratos.tt.semrepasse.index');
    }

    public function repasseindex(){
    	return view('contratos.tt.repasse.index');
    }
}
