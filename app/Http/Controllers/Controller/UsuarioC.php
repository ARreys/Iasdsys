<?php

namespace App\Http\Controllers\Controller;

use App\Classes\UsuarioCL;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioC extends Controller
{
    public function __construct()
    {
        #code
    }

    public function login(Request $req){
        $user = new UsuarioCL();
        $user->setID($req->id);
        $user->setSenha($req->senha);
        $usuario = $user->login();
        if($usuario){
            session(['login' => 'true']);
            session(['nome' => $usuario->nome]);
            session(['telefone' => $usuario->telefone]);
            return redirect()->route('painel');
        }else{
            session(['login' => false]);
            session(['msg' => [
                'tipo' => 'erro',
                'texto' => 'Usuário não encontrado!'
            ]]);
            return redirect()->route('inicio');
        }
    }

    public function logout()
    {
        session()->flush();
        session(['msg' => [
            'tipo' => 'info',
            'texto' => 'Usuário desconectado com sucesso!'
        ]]);
        return redirect()->route("inicio");
    }
}
