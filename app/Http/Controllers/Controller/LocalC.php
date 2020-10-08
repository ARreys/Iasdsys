<?php

namespace App\Http\Controllers\Controller;

use App\Model\Local;
use App\Classes\LocalCL;
use App\Classes\PresencaCL;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocalC extends Controller
{
    public function alterarCapacidade(Request $req){

        $presenca = new PresencaCL();
        $presenca->setQuantidadeMarcada($req->quantidade);
        $localcl = new LocalCL();
        $local = $localcl->localDisponivel();
        $valorAntigo = $local->capacidade;
        $local->capacidade = $req->quantidade;
        $local->save();
        //por padrao é sabado
        $dia_agendar = $presenca->proximaData();
        if($localcl->alterarCapacidade($dia_agendar, $local)){//local vago
            session(['msg' => [
                'tipo' => 'info',
                'texto' => 'Capacidade alterada com sucesso'
            ]]);
        }else{
            $local->capacidade = $valorAntigo;
            $local->save();

        }
        return redirect()->route('user.view.painel');
    }
}
