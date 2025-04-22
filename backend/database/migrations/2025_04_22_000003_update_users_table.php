<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['admin', 'empresa'])->default('empresa'); // Rol del usuario
            $table->foreignId('company_id')->nullable()->unique()->constrained('companies')->onDelete('cascade'); // Relación con una empresa
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
            $table->dropForeign(['company_id']);
            $table->dropColumn('company_id');
        });
    }
}