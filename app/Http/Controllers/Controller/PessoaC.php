<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PessoaC extends Controller
{
    public function __construct(){

    }
    /**---------------------------------Views --------------------------------------------------------*/
    public function viewAnuncios(){
        return view('anuncios');
    }
    public function viewContato(){
        return view('contato-localizacao');
    }
    /**---------------------------------Back --------------------------------------------------------*/

}
