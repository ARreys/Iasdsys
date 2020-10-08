<?php
namespace App\Classes;
class Configuracao
{
    /**Paginas de registro */
    const PAGINAS = 40;
    /**Usaurio admin geral */
    const ADMIN = 1;
    /**Dia de agendamento */
    const DIA = 'Saturday';

    public static function startSystem(){
        App\Model\Usuario::create([
            "nome" => "Admin User",
            "telefone" => '88 6666-9999',
            'senha' => 'admin'
        ]);
        App\Model\Local::create([
            "nome" => "Igreja",
            "rua" => 'rua nome',
            'bairro' => 'bairro nome',
            'em_uso' => 1,
            'capacidade' => 7
        ]);
    }
}
