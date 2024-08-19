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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->date('data'); // Data da consulta
            $table->time('horario'); // Horário da consulta
            $table->string('especialidade'); // Especialidade médica
            $table->foreignId('medico_id')->constrained('usuarios'); // Relaciona com a tabela de usuários (médicos)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
