<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model {

    public $table = 'reserva';
    public $primaryKey = 'id_reserva';
    protected $fillable = ['id_usuario', 'id_ambiente', 'fecha_reserva', 'hora_inicio', 'hora_fin', 'descripcion_reserva'];

    public function getUsuarios() {
        return $this->belongsTo('App\Biblioteca\Usuario', 'id_usuario', 'id_usuario');
    }

    public function getAmbientes() {
        return $this->belongsTo('App\Ambiente', 'id_ambiente', 'id_ambiente');
    }

}
