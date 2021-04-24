<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturationsDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturations_data', function (Blueprint $table) {
            $table->id();
            //llave foranea de la tabla donadores
            $table->foreignId('donator_id')
                ->nullable()
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('set null');
            //llave foranea de la tabla razones fiscales
            $table->foreignId('reason_id')
                ->nullable()
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('set null');
            //nombre y apellidos de contacto
            $table->string("nombre");
            $table->string("apellido_paterno");
            $table->string("apellido_materno");
            //email para enviar la factura
            $table->string("email");
            $table->string("telefono");
            
            //revisar si deben ser hasheados
            $table->string("noCuenta");
            $table->string("rfc");
            $table->string("uso_cfdi");
            
            //direccion de facturacion
            $table->string("calle_principal");
            $table->string("calle_secundaria")->nullable();
            $table->integer("codigo_postal");
            $table->string("colonia");
            $table->string("ciudad");
            $table->string("estado");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturations_data');
    }
}
