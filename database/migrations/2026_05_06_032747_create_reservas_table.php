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
        Schema::create('reservas', function (Blueprint $table) {
    $table->id();
    $table->foreignId('vaga_id')->constrained()->onDelete('cascade');
    $table->string('telefone_usuario');
    $table->string('placa');
    $table->integer('duracao');
    $table->decimal('valor', 8, 2)->nullable();
    $table->boolean('esta_ativa')->default(true);
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
