<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id_cliente');
            $table->string('documento', 45);
            $table->string('nombre', 60);
            $table->string('apellido', 60);
            $table->string('telefono', 20)->nullable();
            $table->string('direccion', 100);
            $table->integer('municipio')->unsigned();
            $table->integer('departamento');
            $table->integer('tipo_cliente')->unsigned();


            $table->unique('documento','documento_UNIQUE');

            $table->index('tipo_cliente','fk_clientes_tipo_cliente_idx');

            $table->foreign('tipo_cliente')
                ->references('id_tipo')->on('tipo_clientes');

            $table->foreign('municipio')
                ->references('id_municipio')->on('municipios');


            $table->timestamps();
            $table->softDeletes();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');

    }
}
