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
        Schema::create('soins_urgents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->boolean('gestesTechniques_abordVeineux');
            $table->boolean('oxygene');
            $table->boolean('guedel');
            $table->boolean('ventilation');
            $table->boolean('sondeVesical');
            $table->boolean('intubation');
            $table->boolean('sondegastrique');
            $table->boolean('massage_cardiaque');
            $table->boolean('drainage_pleural');
            $table->string('perfusions_qualité');
            $table->string('perfusions_quantité');
            $table->boolean('anticonvulsivants_Sedatifs');
            $table->boolean('antipyrétique');
            $table->boolean('antalgiques');
            $table->boolean('antiinflammatoires');
            $table->boolean('antipaludeens');
            $table->boolean('antibiotiques');
            $table->boolean('cardiotoniques');
            $table->boolean('bronchodilatateursIV');
            $table->boolean('corticoides');
            $table->boolean('diuretiques');
            $table->boolean('antiemetiques');
            $table->boolean('ventoline Spray');
            $table->string('autres_Antiparasitaires');
            $table->string('autres_Medicaments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soins_urgents');
    }
};
