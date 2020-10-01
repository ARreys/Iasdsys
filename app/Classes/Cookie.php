<?php
namespace App\Classes;
use Illuminate\Support\Facades\Cookie as Cookies;

class Cookie
{
    public static function set($nome, $valor, $tempo){
        Cookies::queue(Cookies::make($nome, $valor, $tempo));
    }
    public static function get($nome){
        return Cookies::get($nome);
    }
    public static function has($nome){
        return Cookies::has($nome);
    }
    public static function delete($nome){
        Cookies::queue(Cookies::forget($nome));
    }

}
