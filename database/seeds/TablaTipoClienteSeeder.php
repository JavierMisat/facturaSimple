<?php

use Illuminate\Database\Seeder;

class TablaTipoClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_clientes')->insert([
            'descripcion' => 'Residencial',
        ]);

        DB::table('tipo_clientes')->insert([
            'descripcion' => 'Empresarial',
        ]);

        DB::table('tipo_clientes')->insert([
            'descripcion' => 'Gubernamental',
        ]);
    }
}
