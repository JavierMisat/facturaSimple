<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use SistemaGestionSimple\TipoCliente;

class TablaClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = TipoCliente::lists('id_tipo')->all();

        $faker = Faker::create('SistemaGestionSimple\Cliente');

        for($i = 0; $i < 100; $i++) {
            DB::table('clientes')->insert([
                'documento' => $faker->bankAccountNumber,
                'nombre' => $faker->name,
                'apellido' => $faker->lastName,
                'telefono' => $faker->phoneNumber,
                'direccion' => $faker->address,
                'tipo_cliente' => $faker->randomElement($tipos),
                'departamento' => 2,
                'municipio' => $faker->unique()->numberBetween($min = 3, $max = 27),
            ]);
        }
    }
}
