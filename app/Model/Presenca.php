<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Presenca extends Model
{
    use SoftDeletes;
    protected $table = 'presenca';
    protected $primaryKey = 'id';
    const CREATED_AT = 'criado';
    const UPDATED_AT = 'alterado';
    public $timestamps = true;
    protected $guarded = [];

    //presença possui pessoa
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
    //presença possui local
    public function local()
    {
        return $this->belongsTo(Local::class);
    }
}
