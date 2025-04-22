<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlacklistWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blacklist_workers', function (Blueprint $table) {
            $table->id(); // Clave primaria (BIGINT por defecto)
            $table->string('name'); // Nombre del trabajador
            $table->string('previous_company'); // Nombre de la empresa anterior
            $table->text('reason'); // Motivo de la incidencia
            $table->date('departure_date'); // Fecha de salida
            $table->string('nss')->unique(); // Número de Seguro Social (único)
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
        Schema::dropIfExists('blacklist_workers'); // Elimina la tabla si se revierte la migración
    }
}