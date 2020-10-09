<?php

namespace App\Http\Controllers\Controller;

use App\Classes\PresencaCL;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class PessoaC extends Controller
{
    public function __construct(){

    }
    /**---------------------------------Views --------------------------------------------------------*/
    public function viewAnuncios(Request $req){
        return view('anuncios');
    }
    public function viewContato(){
        return view('contato-localizacao');
    }
    public function viewDesenvolvedores(){
        return view('desenvolvedores');
    }

    public function viewInicio(){
        $presenca = new PresencaCL();
        //por padrao é sabado
        $dia_agendar = $presenca->proximaData();
        return view('index-pages.tela-inicio', compact('dia_agendar'));
    }
    /**---------------------------------Back --------------------------------------------------------*/

}
