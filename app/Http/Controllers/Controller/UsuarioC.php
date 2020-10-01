<?php

namespace App\Http\Controllers\Controller;

use App\Classes\Cookie;
use App\Classes\UsuarioCL;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioC extends Controller
{
    public function __construct()
    {
        $this->middleware('login',
            ['except' => [
                'login'
            ]]);
    }
    public function viewPainel(Request $req){
        return view('organizacao.painel');
    }

    /**
     * login
     *
     * @param  mixed $req
     * @return void
     */
    public function login(Request $req){
        $user = new UsuarioCL();
        $user->setID($req->id);
        $user->setSenha($req->senha);
        $usuario = $user->login();
        $req->conectado = (bool)$req->conectado;
        if($usuario){
            session(['login' => 'true']);
            session(['nome' => $usuario->nome]);
            session(['telefone' => $usuario->telefone]);
            if($req->conectado == true){
                //altere 5 para qualquer outro numero de anos
                $tempo = time()+3600*24*30*12*1;
                Cookie::set('id', $usuario->id, $tempo);
                Cookie::set('senha', $usuario->senha, $tempo);
                Cookie::set('conectado', true, $tempo);
            }else{
                Cookie::delete('id');
                Cookie::delete('senha');
                Cookie::delete('conectado');
            }
            return redirect()->route('user.view.painel');
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
