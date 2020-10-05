<?php

namespace App\Http\Controllers\Controller;




use App\Model\Pessoa;
use App\Model\Presenca;
use App\Classes\LocalCL;
use App\Classes\PessoaCL;
use App\Classes\PresencaCL;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PresencaC extends Controller
{
    public function __construct()
    {
        $this->middleware('login',
            ['except' => [
                'agendarPresenca'
            ]]);
    }

    /**
     * agendarPresenca
     * Realiza o agendamento, dizendo que a pessou marcou presença no local fornecido
     * @param  mixed $req
     * @return void
     */
    public function agendarPresenca(Request $req)
    {
        //criar pessoa e pegar id
        $pessoa = new PessoaCL();
        $pessoa->setNome($req->nome);
        $pessoa->setDataNasc($req->data_nasc);
        $pessoa->setTelefone($req->telefone);
        $pessoa->setVisitante((bool)$req->visita);
        if(!$pessoa->verificarIdade()){
            session(['msg' => [
                'tipo' => 'alert',
                'texto' => 'Menores de idade não podem realizar agendamento!'
            ]]);
            return redirect()->route('inicio');
        }
        //verificar local e pegar id
        $localcl = new LocalCL();
        $local = $localcl->localDisponivel();
        //cadastra o sabado agendado
        $presenca = new PresencaCL();
        $presenca->setQuantidadeMarcada($req->quantidade);
        //por padrao é sabado
        $dia_agendar = $presenca->proximaData();
        if($presenca->verficarLotacao($dia_agendar, $local)){//local vago
            $pessoa = $pessoa->create();
            $presenca->agendarPresenca($pessoa,$local,$dia_agendar);
            session(['msg' => [
                'tipo' => 'info',
                'texto' => 'Agendamento concluido com sucesso!'
            ]]);
        }
        return redirect()->route('inicio');
    }

}
