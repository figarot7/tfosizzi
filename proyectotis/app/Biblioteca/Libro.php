<?php

namespace App\Biblioteca;

use Illuminate\Database\Eloquent\Model;

use Symfony\Component\HttpFoundation\File\UploadedFile;

use Storage;

class Libro extends Model
{
    public $table = 'libro';
    public $primaryKey = 'id_libro';    

    protected $fillable = ['titulo', 'autor', 'precio', 'archivo'];

    public function setArchivoAttribute($archivoSubido){
    	if($archivoSubido !== null){
    		if($archivoSubido instanceof UploadedFile){
    			$rand = rand(10000, 99999);
    			$nombre = "$rand-{$archivoSubido->getClientOriginalName()}";
    			$archivoSubido->move(storage_path('app/libros'), $nombre);
    			if(isset($this->attributes['archivo']))
    				$this->eliminarArchivo();
    			$this->attributes['archivo'] = "libros/$nombre";
    		}else{
    			$this->attributes['archivo'] = $archivoSubido;
    		}
    	}
    }

    public function eliminarArchivo(){
    	Storage::delete($this->attributes['archivo']);
    }

    public function scopeBuscar($query, $parametroBusqueda){
        return $query->where('titulo', 'like', "%$parametroBusqueda%")                    
                    ->orWhere('autor', 'like', "%$parametroBusqueda%");
    }
}
