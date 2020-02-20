<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Contrato_sr;

use App\Contrato_cr;

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

            $contratos_cr = Contrato_cr::all();

            return view('admin.index', compact('contratos_sr', 'contratos_cr'));
        }else{
            
            $contratos_sr = Contrato_sr::all();

            $contratos_cr = Contrato_cr::all();

            return view('pesquisador.index', compact('contratos_sr', 'contratos_cr'));
        }
    }

    public function generatePDF($id)
    {   
        $contratos_sr = Contrato_sr::find($id);

        $data = ['title' => '', 'contrato'=> $contratos_sr ];

        $pdf = PDF::loadView('pdf.myPDF', $data);
  
        return $pdf->download('Contrato - Sem Repasse.pdf');
    }

    public function generateRepassePDF($id)
    {   
        $contratos_cr = Contrato_cr::find($id);

        $data = ['title' => '', 'contrato'=> $contratos_cr ];

        $pdf = PDF::loadView('pdf.myRepassePDF', $data);
  
        return $pdf->download('Contrato - Com Repasse.pdf');
    }


    public function contratosindex(){

        $contratos_sr = Contrato_sr::all();
        
        $contratos_cr = Contrato_cr::all();

        return view('admin.contratos', compact('contratos_sr', 'contratos_cr'));
    }
}
