<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContacto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("contactos",function(Blueprint $table){
            $table->increments("id_contacto");
            $table->string("nombres");
            $table->string("apellidos");
            $table->string("email");
            $table->string("pais");
            $table->string("tipo_contacto");
            $table->text("mensaje");
            $table->dateTime("updated_at");
            $table->dateTime("created_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("contactos");
    }
}
