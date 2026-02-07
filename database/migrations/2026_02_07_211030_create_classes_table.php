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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('code_classe')->unique();
            $table->string('nom_classe')->unique();
            $table->foreignId('id_filiere')->constrained('filieres')->onDelete('cascade');
            $table->foreignId('id_sousNiveau')->constrained('sous_niveaux')->onDelete('cascade');
            $table->foreignId('id_tarif')->constrained('tarifs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
