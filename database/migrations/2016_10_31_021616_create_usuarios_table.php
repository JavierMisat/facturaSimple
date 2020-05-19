<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function(Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nombre', 100);
            $table->string('apellido', 100)->nullable();
            $table->string('email', 100)->unique();
            $table->string('foto')->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('password', 100);
            $table->integer('rol')->unsigned();
            $table->integer('municipio')->unsigned();
            $table->integer('departamento');


            $table->foreign('rol')
                ->references('id_rol')->on('roles');

            $table->foreign('municipio')
                ->references('id_municipio')->on('municipios');

            $table->rememberToken();
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
        Schema::drop('usuarios');
    }
}
