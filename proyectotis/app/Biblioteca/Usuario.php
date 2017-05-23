<?php

namespace App\Biblioteca;

use Illuminate\Foundation\Auth\User;
use Hash;

class Usuario extends User
{
	public $table = 'usuario';
    public $primaryKey = 'id_usuario'; 

    protected $fillable = ['nombre', 'ape_pat', 'ape_mat', 'username', 'password', 'tipo'];   

    public function setPasswordAttribute($valor){
    	if($valor !== ''){
    		$this->attributes['password'] = Hash::make($valor);
    	}
    }

    public function getNombreCompleto(){
    	return $this->attributes['nombre'].' '.$this->attributes['ape_pat'].' '.$this->attributes['ape_mat'];
    }

    public function suscripciones(){
        return $this->hasMany('App\Biblioteca\Suscripcion', 'id_usuario', 'id_usuario');
    }
    
    
}
