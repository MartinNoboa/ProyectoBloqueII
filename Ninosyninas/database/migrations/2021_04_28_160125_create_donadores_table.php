<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donadores', function (Blueprint $table) {
            $table->id();

            $table->string("nombre");
            $table->string("apellido_paterno");
            $table->string("apellido_materno")->nullable();
            $table->string("email");
            $table->string("telefono");
            $table->string("calle_principal")->nullable();
            $table->string("calle_secundaria")->nullable();
            $table->integer("codigo_postal")->nullable();
            $table->string("colonia")->nullable();
            $table->string("ciudad")->nullable();
            $table->string("estado")->nullable();
            $table->string("tipo_pago")->nullable();
            $table->string("rfc")->nullable();
            $table->string("numero_cuenta")->nullable();
            $table->string("uso_cfdi")->nullable();
            $table->string("observaciones")->nullable();
            $table->boolean("aprobado");
	
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
        Schema::dropIfExists('donadores');
    }
}
