<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Contrato_sr;

use App\Contrato_cr;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->admin == 1){

            $contratos_cr = Contrato_sr::all();
            $contratos_sr = Contrato_sr::all();

            return view('admin.index', compact('contratos_sr', 'contratos_cr'));
        }else{
            
            $contratos_cr = Contrato_sr::all();
            $contratos_sr = Contrato_sr::all();

            return view('pesquisador.index', compact('contratos_sr', 'contratos_cr'));
        }
    }
}
