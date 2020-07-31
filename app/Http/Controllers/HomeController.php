<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User;

use App\Contrato_sr;
use DateTime;
use App\Contrato_cr;
use PDF;
use IntlDateFormatter;
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

   public function handleDate($date){
    date_default_timezone_set('America/Sao_Paulo');
    $formatter = new IntlDateFormatter('pt_BR',
                                        IntlDateFormatter::MEDIUM,
                                        IntlDateFormatter::NONE,
                                        'America/Sao_Paulo',          
                                        IntlDateFormatter::GREGORIAN);
   // $data = DateTime::createFromFormat('d/m/Y', $date);
    $data = DateTime::createFromFormat('Y-m-d', $date);
   // $timestamp = $formatter->parse($date);
    return $formatter->format($data);

   // return $dateTime;

    }

    public function generatePDF($id)
    {   
        $contratos_sr = Contrato_sr::find($id);
        $contratos_sr->data_foro = $this->handleDate($contratos_sr->data_foro);
        $data = ['title' => '', 'contrato'=> $contratos_sr ];

        $pdf = PDF::loadView('pdf.myPDF', $data);
  
        return $pdf->download('Acordo - Sem Repasse.pdf');
    }

    public function generateRepassePDF($id)
    {   
        $contratos_cr = Contrato_cr::find($id);
        $contratos_cr->data_foro = $this->handleDate($contratos_cr->data_foro);
        $data = ['title' => '', 'contrato'=> $contratos_cr ];

        $pdf = PDF::loadView('pdf.myRepassePDF', $data);
  
        return $pdf->download('Acordo - Com Repasse.pdf');
    }

    public function generateRepasseDOC($id)
    {   
        $contratos_cr = Contrato_cr::find($id);
        $contratos_cr->data_foro = $this->handleDate($contratos_cr->data_foro);

        $data = ['title' => '', 'contrato'=> $contratos_cr ];

        $content = view('doc.com_repasse_doc', $data)->render();

        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        \PhpOffice\PhpWord\Settings::setOutputEscapingEnabled(true);
        $phpWord->setDefaultParagraphStyle(array(
            'alignment' => 'both'
        ));
        $phpWord->addParagraphStyle('Heading4', array('alignment' => 'center'));

        $phpWord->addParagraphStyle('Heading6', array('space' => array('before' => 360), 'indentation' => array('left' => 200)));
        $phpWord->addParagraphStyle('Heading5', array(
            'width'       => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(4),
            'height'      => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(0),
            'positioning' => 'absolute',
        ));

        $phpWord->setDefaultFontName('Times New Roman');
        $phpWord->setDefaultFontSize(12);
        $section = $phpWord->addSection();
        $section->addImage(asset('assets/brazao.jpg'), array('width' => 54, 'height' => 54, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER));
        $footer = $section->addFooter();
        $footer->addImage(asset('assets/sgtt_small1.png'), array('width' => 50, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::RIGHT));
        \PhpOffice\PhpWord\Shared\Html::addHtml($section, $content, false, false);
        // Saving the document as OOXML file...
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        $filename = 'Acordo - Com Repasse.docx';

        $objWriter->save($filename);
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.$filename);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filename));
        flush();
        readfile($filename);
        unlink($filename); // deletes the temporary file     
        exit;   
    }

    public function generateSemRepasseDOC($id)
    {   
        $contratos_cr = Contrato_sr::find($id);
        $contratos_cr->data_foro = $this->handleDate($contratos_cr->data_foro);

        $data = ['title' => '', 'contrato'=> $contratos_cr ];

        $content = view('doc.sem_repasse_doc', $data)->render();

        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        \PhpOffice\PhpWord\Settings::setOutputEscapingEnabled(true);
        $phpWord->addParagraphStyle('Heading4', array('alignment' => 'center'));

        $phpWord->addParagraphStyle('Heading6', array('space' => array('before' => 360), 'indentation' => array('left' => 200)));
        $phpWord->addParagraphStyle('Heading5', array(
            'width'       => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(4),
            'height'      => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(0),
            'positioning' => 'absolute',
        ));

        $phpWord->setDefaultFontName('Times New Roman');
        $phpWord->setDefaultFontSize(12);
        $section = $phpWord->addSection();
        $section->addImage(asset('assets/brazao.jpg'), array('width' => 54, 'height' => 54, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER));
        $footer = $section->addFooter();
        $footer->addImage(asset('assets/sgtt_small1.png'), array('width' => 50, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::RIGHT));
        \PhpOffice\PhpWord\Shared\Html::addHtml($section, $content, false, false);
        // Saving the document as OOXML file...
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        $filename = 'Acordo - Sem Repasse.docx';

        $objWriter->save($filename);
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.$filename);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filename));
        flush();
        readfile($filename);
        unlink($filename); // deletes the temporary file     
        exit;   
    }


    public function contratosindex(){

        $contratos_sr = Contrato_sr::all();
        
        $contratos_cr = Contrato_cr::all();

        return view('admin.contratos', compact('contratos_sr', 'contratos_cr'));
    }
}
