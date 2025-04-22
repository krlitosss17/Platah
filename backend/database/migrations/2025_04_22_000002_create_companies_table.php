<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id(); // Campo ID principal (BIGINT por defecto)
            $table->string('name'); // Nombre de la empresa
            $table->string('email')->unique(); // Correo electrónico único
            $table->string('phone'); // Teléfono de contacto
            $table->string('website')->nullable(); // Sitio web (opcional)
            $table->timestamps(); // Campos created_at y updated_at (timestamps automáticos)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies'); // Elimina la tabla si se revierte la migración
    }
}