<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model {

    public $table = 'rol';
    public $primaryKey = 'id_rol';
    protected $fillable = ['nombre_rol'];

}
