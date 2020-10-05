<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Modelo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Modelo
{
    use SoftDeletes;
    protected $table = 'pessoa';
    protected $primaryKey = 'id';
    const CREATED_AT = 'criado';
    const UPDATED_AT = 'alterado';
    public $timestamps = true;
    protected $guarded = [];

    //uma pessoa pode marca varias presenças em um local
    public function presenca()
    {
        return $this->hasMany(Presenca::class);
    }


}
