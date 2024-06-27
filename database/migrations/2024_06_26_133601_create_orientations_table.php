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
        Schema::create('orientations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->boolean('externe');
            $table->boolean('mises_en_bservation');
            $table->boolean('transferHopitalisation');
            $table->boolean('chirurgie');
            $table->boolean('medecine');
            $table->boolean('pediatrie');
            $table->string('autre');
            $table->date('DateHeure_arrive');
            $table->date('dateHeure_sortie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orientations');
    }
};
