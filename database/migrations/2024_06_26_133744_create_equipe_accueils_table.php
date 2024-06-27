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
        Schema::create('equipes_accueil', function (Blueprint $table) {
            $table->id();
            $table->string('chirurgien');
            $table->string('medecin');
            $table->string('infirmier');
            $table->string('interne');
            $table->string('aide_soignant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipe_accueils');
    }
};
