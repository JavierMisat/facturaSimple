<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function(Blueprint $table) {

            $table->increments('id_municipio');
            $table->integer('id_departamento')->unsigned();
            $table->string('descripcion', 100);

            $table->foreign('id_departamento')
                ->references('id_departamento')->on('departamentos');

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
        Schema::drop('municipios');
    }
}
