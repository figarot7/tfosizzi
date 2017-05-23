<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Biblioteca\Libro;

use App\Biblioteca\Suscripcion;

use App\Biblioteca\Usuario;

use \Auth;

use Carbon\Carbon;

class SuscripcionController extends Controller
{
    public function __construct(){
        $this->middleware('autenticado');         
    }

    public function listaS(Request $peticion){
        $datoBuqueda = $peticion->input('autorTitulo');

        $suscripciones = Auth::user()->suscripciones;
        $libros;
        $ids_libros;
        foreach ($suscripciones as $suscripcion) {
            $ids_libros[] = $suscripcion->id_libro;
        }       
        if(count($suscripciones) <= 0){   
            return redirect('/suscripcion/listaNS')->with('errormsg', 'Usted no se encuentra suscrito a ningun libro. Porfavor suscribase a uno de nuestros libros');
        }else{
              $libros = Libro::where('activo', 1)->buscar($datoBuqueda)->whereIn('id_libro', $ids_libros)->orderBy('id_libro')->paginate(2);
              $parametros = ['libros' => $libros, 'suscritos' => true];
              return view('suscripcion.lista', $parametros);
        }

        
        
    }

    public function listaNS(Request $peticion){
        $datoBuqueda = $peticion->input('autorTitulo');

        $suscripciones = Auth::user()->suscripciones;
        $ids_libros;
        foreach ($suscripciones as $suscripcion) {
            $ids_libros[] = $suscripcion->id_libro;
        }
        if(count($suscripciones) <= 0){
             $libros = Libro::where('activo', 1)->buscar($datoBuqueda)->orderBy('id_libro')->paginate(2);
        }else{
             $libros = Libro::where('activo', 1)->buscar($datoBuqueda)->whereNotIn('id_libro', $ids_libros)->orderBy('id_libro')->paginate(2);
        }
       
        $parametros = ['libros' => $libros, 'suscritos' => false];
        return view('suscripcion.lista', $parametros);
    }

    public function suscribir($id_libro){
        $libro = Libro::find($id_libro);
        $suscripcion = new Suscripcion();
        $suscripcion->id_usuario = Auth::user()->id_usuario;
        $suscripcion->id_libro = $id_libro;
        $suscripcion->fecha = Carbon::now();
        $suscripcion->precio  = $libro->precio;
        $suscripcion->save();
        return redirect('suscripcion/listaS');
    }
}
