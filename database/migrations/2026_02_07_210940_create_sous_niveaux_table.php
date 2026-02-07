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
        Schema::create('sous_niveaux', function (Blueprint $table) {
            $table->id();
            $table->string('code_sousNiveau')->unique();
            $table->string('nom_sousNiveau')->unique();
            $table->foreignId('id_niveau')->constrained('niveaux')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sous_niveaux');
    }
};
