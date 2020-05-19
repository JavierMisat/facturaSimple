<?php

use Illuminate\Database\Seeder;
use SistemaGestionSimple\Cliente;
use Faker\Factory as Faker;
use SistemaGestionSimple\Usuario;

class TablaFacturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = Cliente::lists('id_cliente')->all();
        $usuarios = Usuario::lists('id_usuario')->all();

        $faker = Faker::create('SistemaGestionSimple\Factura');

        for($i = 0; $i < 20; $i++) {
            DB::table('facturas')->insert([
                'cod_factura' => $faker->creditCardNumber,
                'estado' => $faker->randomElement(array(0, 1)),
                'fecha_corte' => \Carbon\Carbon::now(),
                'fecha_limite_pago' => \Carbon\Carbon::tomorrow(),
                'usuario' => $faker->randomElement($usuarios),
                'cliente' => $faker->randomElement($clientes),
                'valor_pago' => $faker->randomNumber($nbDigits = NULL, $strict = false) ,
            ]);
        }
    }
}
