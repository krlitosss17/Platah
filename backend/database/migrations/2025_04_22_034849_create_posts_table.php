<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Clave primaria (BIGINT por defecto)
            $table->string('title'); // Título del comunicado
            $table->text('content'); // Contenido del comunicado
            $table->string('image')->nullable(); // Ruta de la imagen asociada (opcional)
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade'); // Relación con la tabla users
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
        Schema::dropIfExists('posts'); // Elimina la tabla si se revierte la migración
    }
}