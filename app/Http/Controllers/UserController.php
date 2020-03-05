<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, $id){

        $user = User::find($id);
         $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'cpf' => 'required|string|max:14|min:11',
            'telefone' => 'required|string|max:14',
            'celular' => 'required|string|max:15',
        ]);


        $user->update($request->all());

        return redirect('/meuperfil')->with('message', 'Perfil editado com');
    }
}
