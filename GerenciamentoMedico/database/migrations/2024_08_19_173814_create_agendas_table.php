<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios'); // Chave estrangeira para a tabela de usuários (pacientes)
            $table->foreignId('consulta_id')->constrained('consultas'); // Chave estrangeira para a tabela de consultas
            $table->string('status'); // Status da consulta (por exemplo, 'marcada', 'cancelada')
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
