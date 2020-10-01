<?php

namespace App\Http\Controllers\Controller;

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
    /**---------------------------------Back --------------------------------------------------------*/

}
