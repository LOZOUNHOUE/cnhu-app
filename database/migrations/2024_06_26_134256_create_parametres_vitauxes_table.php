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
        Schema::create('parametres_vitaux', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->string('neurologique_conscience');
            $table->string('sensibilite');
            $table->string('motricite');
            $table->string('convulsion');
            $table->float('temperature');
            $table->boolean('hemodynamique_pressionArterielle');
            $table->boolean('pouls');
            $table->boolean('coloration');
            $table->boolean('sueur');
            $table->boolean('diurèse');
            $table->boolean('auscultation');
            $table->boolean('respiration');
            $table->boolean('frequence');
            $table->boolean('paradoxale');
            $table->boolean('dyspnee');
            $table->boolean('gasp');
            $table->boolean('apnee');
            $table->boolean('satusation_oxygene');
            $table->boolean('cyanose');
            $table->boolean('encombrement');
            $table->string('abdomen_ballonné');
            $table->string('douleur');
            $table->string('cirombili');
            $table->string('plaie_diverse');
            $table->string('hemorragie_externe');
            $table->string('brulure');
            $table->string('facture_evidente');
            $table->string('diers');
            $table->string('detro');
            $table->string('autre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametres_vitauxes');
    }
};
