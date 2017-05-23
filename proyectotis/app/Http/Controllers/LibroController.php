<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Biblioteca\Libro;

use App\Biblioteca\Usuario;

use \Auth;

use App\Http\Requests\FormCrearLibro;

use \finfo;

use \Storage;

class LibroController extends Controller
{
    //
    public function __construct(){
        $this->middleware('autenticado');
         $this->middleware('usuario', ['except' => ['getLibro', 'archivoPdf', 'ver']]);
         //crear->almacenar, eliminar, editar->actualizar
    }
    
    public function crear(){//adm
    	return view('libro.crear');
    }

    //public function almacenar(Request $peticion){
    public function almacenar(FormCrearLibro $peticion){//adm
    	Libro::create($peticion->all());
    	return redirect('/libro/lista')->with('book_created', 'Libro creado');
    }

    public function lista(Request $peticion){//adm
    	$datoBuqueda = $peticion->input('nombreTitulo');
    	$libros = Libro::where('activo', 1)->buscar($datoBuqueda)->orderBy('id_libro')->paginate(5);
    	$parametros = ['libros' => $libros];
    	return view('libro.lista', $parametros);
    }

    public function eliminar($id){//adm
    	$libro = $this->getLibro($id);
    	$libro->activo = 0;
    	$libro->save();
    	return redirect('/libro/lista')->with('book_deleted', 'Libro eliminado');
    }

    public function editar($id){//adm
    	$libro = $this->getLibro($id);
    	$parametros = ['libro' => $libro];
    	return view('libro.editar', $parametros);
    }

    public function actualizar($id, Request $peticion){//adm
    	$libro = $this->getLibro($id);
    	$libro->fill($peticion->all());
    	$libro->save();
    	return redirect('/libro/lista')->with('book_updated', 'Libro modificado');
    }

    public function ver($id){
    	 $libro = $this->getLibro($id);        
         $this->authorize('ver',$libro);                
         $parametros = ['libro' => $libro];
         return view('libro.ver', $parametros);        
    }

    public function archivoPdf($id){
    	$libro = $this->getLibro($id);
        $this->authorize('ver',$libro);  
        $contenido = Storage::get($libro->archivo);
        $finfo = new finfo(FILEINFO_MIME);
        $mime = $finfo->buffer($contenido);
        return response($contenido)
            ->header('Content-Type', $mime);
    }

    public function getLibro($id){
    	$libro = Libro::where('id_libro',$id)->where('activo', 1)->first();
    	if ($libro === null)
    		abort(500);
    	else return $libro;
    }
}
