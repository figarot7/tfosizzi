<?php

namespace App\Biblioteca;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    public $table = 'suscripcion';
    public $primaryKey = 'id_suscripcion';  

    public function usuario(){
    	return $this->belongsTo('App\Biblioteca\Usuario', 'id_usuario', 'id_usuario');
    }

    public function libro(){
    	return $this->belongsTo('App\Biblioteca\Libro', 'id_libro', 'id_libro');
    }

}
