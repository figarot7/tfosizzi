<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Biblioteca\Usuario;
use App\Biblioteca\Libro;
use App\Biblioteca\Suscripcion;

class LibroPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /*public function ver(Libro $libro, Usuario $usuario){
      $resultado = Suscripcion::where('id_libro',$libro->id_libro)->where('id_usuario',$usuario->id_usuario)->get();*/
   public function ver( Usuario $usuario, Libro $libro){
        $resultado = Suscripcion::where('id_libro',$libro->id_libro)->where('id_usuario',$usuario->id_usuario)->get();
        if((count($resultado) >= 1) || ($usuario->tipo === 'adm'))
            return true;
        else 
            return false;
    }
}
