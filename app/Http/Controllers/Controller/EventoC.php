<?php

namespace App\Http\Controllers\Controller;

use App\Model\Evento;
use App\Classes\LocalCL;
use App\Classes\EventoCL;
use Illuminate\Http\Request;
use App\Classes\Configuracao;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EventoC extends Controller
{
    public function __construct()
    {
        $this->middleware('login',
            ['except' => [
                'viewEvento'
            ]]);
    }

    public function viewEvento(Request $req){
        $eventos = Evento::paginate(Configuracao::PAGINAS);
        return view('anuncios', compact('eventos'));
    }

    public function create(Request $req)
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $evento = new EventoCL();
        $evento->setTitulo($req->titulo);
        $evento->setDescricao($req->descricao);
        $foto = $_FILES['img'];
        $foto_blob = file_get_contents($foto['tmp_name']);
        $local = new LocalCL();
        $local = $local->localDisponivel();
        $evento->create($local->id,$foto_blob);
        return redirect()->route('user.view.painel');
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
