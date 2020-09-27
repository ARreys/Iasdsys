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
}
