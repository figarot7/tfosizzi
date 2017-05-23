<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
  public $table = 'ambiente';
  public $primaryKey = 'id_ambiente';
  protected $fillable = ['nombre_ambiente','descripcion_ambiente','capacidad']; 

}
