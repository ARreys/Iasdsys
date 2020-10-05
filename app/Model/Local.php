<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Local extends Model
{
    use SoftDeletes;
    protected $table = 'local';
    protected $primaryKey = 'id';
    const CREATED_AT = 'criado';
    const UPDATED_AT = 'alterado';
    public $timestamps = true;
    protected $guarded = [];
    //um local contem varios participantes presentes
    public function presenca()
    {
        return $this->hasMany(Presenca::class);
    }
    //um local pode possui varios eventos num dia
    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }
}
