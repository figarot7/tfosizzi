<?php

use Illuminate\Database\Seeder;

use App\Biblioteca\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Libro::create([
            'id_libro' => 1,
        	'titulo' => 'NO SÉ DONDE ESTÁ EL LÍMITE PERO SI SÉ DONDE NO ESTÁ', 
        	'autor' => 'JOSEF AJRAM', 
        	'precio' => 100.0, 
        	'archivo' => 'libros/libro1.pdf'
        	]);
        Libro::create([
            'id_libro' => 2,
        	'titulo' => 'CINCUENTA SOMBRAS DE GREY', 
        	'autor' => 'E.L. JAMES', 
        	'precio' => 200.0, 
        	'archivo' => 'libros/libro2.pdf'
        	]);
        Libro::create([
            'id_libro' => 3,
        	'titulo' => 'LOS SECRETOS DE LA FELICIDAD', 
        	'autor' => 'LUIS ROJAS MARCOS', 
        	'precio' => 30.5, 
        	'archivo' => 'libros/libro3.pdf'
        	]);
        Libro::create([
            'id_libro' => 4,
        	'titulo' => 'PÍDEME LO QUE QUIERAS', 
        	'autor' => 'MEGAN MAXWELL', 
        	'precio' => 94.7, 
        	'archivo' => 'libros/libro4.pdf'
        	]);
        Libro::create([
            'id_libro' => 5,
        	'titulo' => 'EL TANGO DE LA GUARDIA VIEJA', 
        	'autor' => 'ARTURO PÉREZ REVERTE', 
        	'precio' => 143.3, 
        	'archivo' => 'libros/libro5.pdf'
        	]);
        Libro::create([
            'id_libro' => 6,
        	'titulo' => 'UNA VACANTE IMPREVISTA', 
        	'autor' => 'J.K. ROWLING', 
        	'precio' => 78.9, 
        	'archivo' => 'libros/libro6.pdf'
        	]);
        Libro::create([
            'id_libro' => 7,
        	'titulo' => 'EL AZAR DE LA MUJER RUBIA', 
        	'autor' => 'MANUEL VICENT', 
        	'precio' => 65.7, 
        	'archivo' => 'libros/libro7.pdf'
        	]);
        Libro::create([
            'id_libro' => 8,
        	'titulo' => 'MISIÓN OLVIDO', 
        	'autor' => 'MARÍA DUEÑAS', 
        	'precio' => 175.2, 
        	'archivo' => 'libros/libro8.pdf'
        	]);
        Libro::create([
            'id_libro' => 9,
        	'titulo' => 'EL GUARDIÁN INVISIBLE', 
        	'autor' => 'DOLORES REDONDO', 
        	'precio' => 43.9, 
        	'archivo' => 'libros/libro9.pdf'
        	]);
        Libro::create([
            'id_libro' => 10,
        	'titulo' => 'LA MARCA DEL MERIDIANO', 
        	'autor' => 'LORENZO SILVA', 
        	'precio' => 128.1, 
        	'archivo' => 'libros/libro10.pdf'
        	]);
    }
}
