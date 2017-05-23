<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ambiente;
class AmbienteController extends Controller
{
    //
    public function lista(){
      $listaAmbiente = Ambiente::where('activo', '1')->get();
      $parametros = ['ambientes' => $listaAmbiente];
      return view('ambiente.lista', $parametros);
    }
    public function crear(){
      return view('ambiente.crear');
    }

    public function guardar(Request $peticion){
      $amb = Ambiente::create(['nombre_ambiente' => $peticion->input('nombre'),'descripcion_ambiente' => $peticion->input('descripcion'),'capacidad' => $peticion->input('capacidad')]);
      return redirect('/ambiente/lista');
    }

    public function eliminar($id){
      $amb = Ambiente::find($id);
      $amb->activo = '0';
      $amb->save();
      return redirect('/ambiente/lista');
    }
    public function editarForm($id){
        $ambiente = Ambiente::find($id);
        $parametros = ['ambiente' => $ambiente];
        return view('ambiente.editar', $parametros);
    }
    public function editar(Request $peticion){
        $ambienteEditar = Ambiente::find($peticion->input('id'));
        $ambienteEditar->nombre_ambiente = $peticion->input('nombre');
        $ambienteEditar->descripcion_ambiente = $peticion->input('descripcion');
        $ambienteEditar->capacidad = $peticion->input('capacidad');
        $ambienteEditar->save();
        return redirect ('/ambiente/lista');
    }
}
