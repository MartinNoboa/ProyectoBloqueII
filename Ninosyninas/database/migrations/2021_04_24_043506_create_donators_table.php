<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donators', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("apellido_paterno");
            $table->string("apellido_materno")->nullable();
            $table->string("email");
            $table->string("telefono");
            $table->string("calle_principal");
            $table->string("calle_secundaria")->nullable();
            $table->integer("codigo_postal");
            $table->string("colonia");
            $table->string("ciudad");
            $table->string("estado");
            $table->string("tipo_pago");
            $table->string("uso_cfdi")->nullable();
            $table->string("observaciones")->nullable();
            $table->boolean("aprobado");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donators');
    }
}
