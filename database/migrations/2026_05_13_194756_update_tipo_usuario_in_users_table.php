<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('tipo_usuario', ['admin', 'gerente', 'camarero', 'cocina'])
                  ->default('camarero')  // pon el default que corresponda
                  ->change();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('tipo_usuario', ['gerente', 'camarero', 'cocina'])
                  ->default('camarero')
                  ->change();
        });
    }
};