<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'heroes';

    public function level(){
        return $this->hasOne('App\Level', 'id', 'level_id'); // (tabla apuntar, clave primaria de la tabla apuntar, clave foranea de la tabla)
    }
}
