<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Ambiente;
use App\Reserva;
use App\Biblioteca\Usuario;
use \Auth;

class ReservaController extends Controller {

    public function crear() {
        $listaAmbiente = Ambiente::all();
        $parametros = ['ambientes' => $listaAmbiente];
        return view('reserva.crear', $parametros);
    }

    public function guardar(Request $peticion) {
        $reserva = Reserva::create([
                    'id_usuario' => Auth::user()->id_usuario,
                    'id_ambiente' => $peticion->input('ambiente'),
                    'fecha_reserva' => $peticion->input('fecha'),
                    'hora_inicio' => $peticion->input('hinicio'),
                    'hora_fin' => $peticion->input('hfin'),
                    'descripcion_reserva' => $peticion->input('descripcion')
        ]);
    }

    public function lista() {
        $listaReservas = Reserva::all();

        $reservasInfo;
        foreach ($listaReservas as $reserva) {
            $ambienteT = Ambiente::find($reserva->id_ambiente);
            $usuarioT = Usuario::find($reserva->id_usuario);
            $reservaData["nombre_ambiente"] = $ambienteT->nombre_ambiente;
            $reservaData["fecha_reserva"] = $reserva->fecha_reserva;
            $reservaData["hora_inicio"] = $reserva->hora_inicio;
            $reservaData["hora_fin"] = $reserva->hora_fin;
            $reservaData["descripcion_reserva"] = $reserva->descripcion_reserva;
            $reservaData["nombre"] = $usuarioT->nombre;
            $reservaData["ape_pat"] = $usuarioT->ape_pat;
            $reservaData["ape_mat"] = $usuarioT->ape_mat;
            $reservasInfo[] = $reservaData;
        }
        //return $listaReservas->toJson();
        //return json_encode($reservasInfo);
        $parametros = ['reservas' => $reservasInfo];
        return view('reserva.lista', $parametros);
    }

}
