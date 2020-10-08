<?php
namespace App\Classes;

use App\Model\Local;
use App\Model\Usuario;

class Configuracao
{
    /**Paginas de registro */
    const PAGINAS = 40;
    /**Usaurio admin geral */
    const ADMIN = 1;
    /**Dia de agendamento */
    const DIA = 'Saturday';

    public static function startSystem(){
        Usuario::create([
            "nome" => "Admin User",
            "telefone" => '88 6666-9999',
            'senha' => 'admin'
        ]);
        Local::create([
            "nome" => "Igreja",
            "rua" => 'rua nome',
            'bairro' => 'bairro nome',
            'em_uso' => 1,
            'capacidade' => 7
        ]);
    }
}
