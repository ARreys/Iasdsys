<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use SoftDeletes;
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    const CREATED_AT = 'criado';
    const UPDATED_AT = 'alterado';
    public $timestamps = true;
    protected $guarded = [];
    //um usuario administra(cadastra) varios eventos
    public function eventos()
    {
        return $this->hasMany(Model\Evento::class);
    }
}
