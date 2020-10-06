<?php

namespace App\Http\Controllers\Controller;

use App\Model\Local;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocalC extends Controller
{
    public function alterarCapacidade(Request $req){
        Local::where('em_uso',1)->update([
            "capacidade" => $req->capacidade
        ]);
        return redirect()->route('user.view.painel');
    }
}
