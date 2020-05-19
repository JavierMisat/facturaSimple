<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id_factura');
            $table->integer('usuario')->unsigned();
            $table->integer('cliente')->unsigned();
            $table->date('fecha_corte')->nullable();
            $table->date('fecha_limite_pago')->nullable();
            $table->dateTime('fecha_pago');
            $table->decimal('valor_pago', 12, 2);
            $table->boolean('estado');


            $table->foreign('usuario')
                ->references('id_usuario')->on('usuarios');

            $table->foreign('cliente')
                ->references('id_cliente')->on('clientes');

            $table->softDeletes();
            $table->timestamps();

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('facturas');

    }
}
