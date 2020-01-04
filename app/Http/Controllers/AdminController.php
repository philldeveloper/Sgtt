<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contrato_sr;

use Auth;


class AdminController extends Controller
{
    public function index(){

    	$contratos_sr = Contrato_sr::all();

    	return view('admin.index', compact('contratos_sr'));
    }

    public function analyticsindex(){
    	return view('admin.analytics');
    }
}
