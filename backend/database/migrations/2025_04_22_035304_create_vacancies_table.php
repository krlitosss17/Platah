<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id(); // Clave primaria (BIGINT por defecto)
            $table->string('title'); // Título de la vacante
            $table->text('description'); // Descripción de la vacante
            $table->text('requirements'); // Requisitos de la vacante
            $table->decimal('salary', 10, 2)->nullable(); // Salario ofrecido (opcional, con precisión)
            $table->string('contact'); // Información de contacto (correo o teléfono)
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade'); // Relación con la tabla companies
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies'); // Elimina la tabla si se revierte la migración
    }
}