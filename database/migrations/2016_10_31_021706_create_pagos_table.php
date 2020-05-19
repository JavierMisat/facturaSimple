<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Schema::create('pagos', function (Blueprint $table) {

             $table->increments('id_pago');
             $table->integer('id_usuario')->unsigned();
             $table->string('cod_factura', 100);
             $table->text('comentarios')->nullable();
             $table->string('municipio', 45);

             $table->foreign('id_usuario')
                 ->references('id_usuario')->on('usuarios');


             $table->softDeletes();
             $table->timestamps();
         });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
