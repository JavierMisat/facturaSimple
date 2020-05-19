<?php

use Illuminate\Database\Seeder;

class TablaUsariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nombre' => 'Administrador',
            'email' => 'simplecomunicaciones2016@gmail.com',
            'rol' => 1,
            'password' => bcrypt('Mail:Simple#'),
            'municipio' => 1,
            'departamento' => 1,
        ]);


        DB::table('usuarios')->insert([
            'nombre' => 'Javier Misat',
            'email' => 'helpdevs@gmail.com',
            'rol' => 1,
            'password' => bcrypt('1073604174'),
            'municipio' => 1,
            'departamento' => 1,
        ]);
    }
}
