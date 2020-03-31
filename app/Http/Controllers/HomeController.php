<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User;

use App\Contrato_sr;

use App\Contrato_cr;
use PDF;

use Illuminate\Support\Facades\DB;

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

            $user = User::all();

            $contratos_cr = Contrato_cr::all();

            return view('admin.index', compact('contratos_sr', 'contratos_cr', 'user'));
        }else{
             $id = Auth::user()->id;

             $contratos_sr = DB::table('contrato_srs')
             ->join('users', 'contrato_srs.user_id', '=', 'users.id')
             ->select('contrato_srs.*', 'users.nome', 'users.email')
             ->where('contrato_srs.user_id', '=', $id)
             ->where('users.id', '=', $id)
             ->get();

             $contratos_cr = DB::table('contrato_crs')
             ->join('users', 'contrato_crs.user_id', '=', 'users.id')
             ->select('contrato_crs.*', 'users.nome', 'users.email')
             ->where('contrato_crs.user_id', '=', $id)
             ->where('users.id', '=', $id)
             ->get();
            
            /*  $contratos_sr = DB::select("SELECT c.`*`, u.nome, u.email
            FROM
                contrato_srs c
             INNER JOIN users u ON u.id = c.user_id
             WHERE c.user_id = ? AND u.id = ?", [$id, $id]);

             $contratos_cr = DB::select("SELECT c.`*`, u.nome, u.email
             FROM
                 contrato_crs c
             INNER JOIN users u ON u.id = c.user_id
             WHERE c.user_id = ? AND u.id = ?", [$id, $id]); */

            // $contratos_sr = Contrato_sr::where('user_id', Auth::id())->with(['user'])->get();
            // $contratos_cr = Contrato_cr::where('user_id', Auth::id())->with(['user'])->get();

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
