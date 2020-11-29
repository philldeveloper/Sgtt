<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Contrato_sr;
use App\Contrato_cr;
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

        return redirect('meuperfil')->with('message', 'Perfil editado com Sucesso');
    }

    public function destroy($id){
        $user = User::find($id);
        $user_deleted = $user;
        Contrato_cr::where('user_id', $id)->delete();
        Contrato_sr::where('user_id', $id)->delete();
        $user->delete();



        return redirect('/')->with('message', 'Seu usuário e seus contratos foram deletado com sucesso');
    }
}
