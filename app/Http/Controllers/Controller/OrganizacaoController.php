<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrganizacaoController extends Controller
{
    public function __construct(){
        $this->middleware('login',
            ['except' => [
            ]]);
    }
    public function painelView()
    {
        return view("organizacao/painel");
    }
    public function adicionaranuncioView()
    {
        return view("organizacao/adicionaranuncio");
    }
    public function removeranuncioView()
    {
        return view("organizacao/removeranuncio");
    }
    public function visitantesView()
    {
        return view("organizacao/visitantes");
    }
    public function administradoresView()
    {
        return view("organizacao/administradores");
    }
    public function presencasView()
    {
        return view("organizacao/marcarampresenca");
    }
}

