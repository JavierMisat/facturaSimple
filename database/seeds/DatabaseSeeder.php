<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(TablaRolesSeeder::class);
         //$this->call(TablaUsariosSeeder::class);
        //$this->call(crear_usuarios_prueba::class);
        $this->call(TablaTipoClienteSeeder::class);

        Model::reguard();
    }
}
