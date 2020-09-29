<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Evento extends Model
{
    use SoftDeletes;
    protected $table = 'evento';
    protected $primaryKey = 'id';
    const CREATED_AT = 'criado';
    const UPDATED_AT = 'alterado';
    public $timestamps = true;
    protected $guarded = [];
    //um evento possui um local(nessa situação)
    public function local()
    {
        return $this->belongsTo(Model\Local::class);
    }
    //um evento é cadastrado, administrado por um usuario
    public function usuario()
    {
        return $this->belongsTo(Model\Usuario::class);
    }
}
