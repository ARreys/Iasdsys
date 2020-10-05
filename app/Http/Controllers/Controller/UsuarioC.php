<?php

namespace App\Http\Controllers\Controller;

use App\Model\Pessoa;
use App\Classes\Cookie;
use App\Model\Presenca;
use App\Classes\PessoaCL;
use App\Classes\UsuarioCL;
use App\Classes\PresencaCL;
use Illuminate\Http\Request;
use App\Classes\Configuracao;
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
        $pessoa = Pessoa::join('presenca', 'pessoa.id', 'presenca.pessoa_id')
        ->orderBy('presenca.dia_presenca','desc')
        ->paginate(Configuracao::PAGINAS);
        $ps = new PessoaCL();
        foreach ($pessoa as $pessoas) {
            $ps->setDataNasc($pessoas->data_nasc);
            $pessoas->data_nasc = $ps->verificarIdade(2);
        }

        return view('organizacao.painel', compact('pessoa'));
    }
    public function viewVisitantes(Request $req){
        $presencaCl = new PresencaCL();
        $pessoa = Pessoa::join('presenca', 'pessoa.id', 'presenca.pessoa_id')
        ->where('pessoa.visitante',1)
        ->orderBy('presenca.dia_presenca','desc')
        ->paginate(Configuracao::PAGINAS);
        $ps = new PessoaCL();
        foreach ($pessoa as $pessoas) {
            $ps->setDataNasc($pessoas->data_nasc);
            $pessoas->data_nasc = $ps->verificarIdade(2);
        }
        return view('organizacao.visitantes', compact('pessoa'));
    }
    public function viewMarcaramPresenca(Request $req){
        $presencaCl = new PresencaCL();
        $pessoa = Pessoa::join('presenca', 'pessoa.id', 'presenca.pessoa_id')
        ->where('presenca.dia_presenca',$presencaCl->proximaData())
        ->orderBy('presenca.dia_presenca','desc')
        ->paginate(Configuracao::PAGINAS);
        $ps = new PessoaCL();
        foreach ($pessoa as $pessoas) {
            $ps->setDataNasc($pessoas->data_nasc);
            $pessoas->data_nasc = $ps->verificarIdade(2);
        }
        return view('organizacao.marcarampresenca',compact('pessoa'));
    }
    public function viewAdmin(Request $req){
        return view('organizacao.administradores');
    }
    public function viewRemoveAnuncio(Request $req){
        return view('organizacao.removeranuncio');
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
            session(['id' => $usuario->id]);
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
