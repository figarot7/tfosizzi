<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Rol;

class RolController extends Controller {

    public function crear() {
        $listaRoles = Rol::all();
        $parametros = ['roles' => $listaRoles];
        return view('rol.crear', $parametros);
    }

    public function guardar(Request $peticion) {
        $rol = Rol::create([
                    'nombre_rol' => $peticion->input('nombrerol'),
                    'nivel_permiso' => $peticion->input('nivelpermiso')
        ]);
        $listaRoles = Rol::all();
        $parametros = ['roles' => $listaRoles];
         return redirect('/rol/crear');
    }

}
