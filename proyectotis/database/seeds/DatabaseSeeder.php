<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioSeeder::class);
        $this->call(LibroSeeder::class);
        $this->call(SuscripcionSeeder::class);
        $this->call(ambienteSeeder::class);
        $this->call(ReservaSeeder::class);
        $this->call(RolSeeder::class);
    }
}
