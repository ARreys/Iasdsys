<?php

namespace App\Http\Controllers\Controller;

use App\Model\Evento;
use App\Model\Pessoa;
use App\Model\Usuario;
use App\Classes\Cookie;
use App\Model\Presenca;
use App\Classes\LocalCL;
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
        $local = new LocalCL();
        $local = $local->localDisponivel();
        foreach ($pessoa as $pessoas) {
            $ps->setDataNasc($pessoas->data_nasc);
            $pessoas->data_nasc = $ps->verificarIdade(2);
        }

        return view('organizacao.painel', compact('pessoa','local'));
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
        $usuarios = Usuario::paginate(Configuracao::PAGINAS);
        if(Configuracao::ADMIN != session('id')){
            foreach($usuarios as $u){
                $u->senha = "********";
            }
        }
        return view('organizacao.administradores', compact('usuarios'));
    }
    public function viewRemoveAnuncio(Request $req){
        $eventos = Evento::orderBy('criado', 'desc')->paginate(Configuracao::PAGINAS);
        return view('organizacao.removeranuncio', compact('eventos'));
    }
    public function create(Request $req){
        Usuario::create([
            "telefone" => $req->telefone,
            "nome" => $req->nome,
            "senha" => $req->senha
        ]);
        return redirect()->route('user.view.admin');
    }
    public function delete(Request $req){
        Presenca::where('pessoa_id',$req->id)->forceDelete();
        Pessoa::where('id',$req->id)->forceDelete();
        return redirect()->route('user.view.painel');
    }
    public function deleteAll(Request $req){
        $presenca = new PresencaCL();
        $data = $presenca->proximaData();
        $lista = [];
        $quantidade = Presenca::where('dia_presenca','<',$data)->count();
        if($quantidade > 0){
            $presencas = Presenca::where('dia_presenca','<',$data)->get();
            foreach($presencas as $presenca){
                $id = $presenca->pessoa_id;
                Presenca::where('pessoa_id',$id)->forceDelete();
                Pessoa::where('id',$id)->forceDelete();
            }
            session(['msg' => [
                'tipo' => 'info',
                'texto' => 'Foram deletados um total de '.$quantidade.' registros passados!'
            ]]);
        }else{
            session(['msg' => [
                'tipo' => 'alert',
                'texto' => 'Não existem registros de presenças passadas!'
            ]]);
        }

        return redirect()->route('user.view.painel');
    }

    public function deleteAdmin(Request $req){
        if(Configuracao::ADMIN != $req->id){
            Usuario::where('id',$req->id)->forceDelete();
        }else{
            session(['msg' => [
                'tipo' => 'alert',
                'texto' => 'Não existem registros de presenças passadas!'
            ]]);
        }
        return redirect()->route('user.view.admin');
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
