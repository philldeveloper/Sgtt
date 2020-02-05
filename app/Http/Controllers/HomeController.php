<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Contrato_sr;

use PDF;

class HomeController extends Controller
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

            $contratos_sr = Contrato_sr::all();

            return view('admin.index', compact('contratos_sr'));
        }else{
            
            $contratos_sr = Contrato_sr::all();

            return view('pesquisador.index', compact('contratos_sr'));
        }
    }

    public function generatePDF($id)
    {   
        $contratos_sr = Contrato_sr::find($id);

        $data = ['title' => '', 'contrato'=> $contratos_sr ];

        $pdf = PDF::loadView('pdf.myPDF', $data);
  
        return $pdf->download('Contrato - Sem Repasse.pdf');
    }
}
