<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SegurancaController extends Controller
{
    public function __construct(){
    $this->middleware('login',
        ['except' => [ "login"
        ]]);
}

    public function login (Request $request){
        if($request->id === "5" && $request->senha === "senha"){
            session(["login" => true]);
            return redirect()->route("painel");
        }else{
            session(["login" => false]);
            return redirect()->route("usernaoencontrado");
        }
    }
}
