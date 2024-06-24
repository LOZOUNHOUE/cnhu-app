<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametresVitauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametres_vitaux', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->string('neurologique_conscience');
            $table->string('sensibilite');
            $table->string('motricite');
            $table->string('muqueuse');
            $table->float('temperature');
            $table->string('hemodynamique_pressionArterielle');
            $table->string('pouls');
            $table->string('etat');
            $table->string('coloration');
            $table->string('sueur');
            $table->string('frissons');
            $table->string('respiration_type');
            $table->integer('frequence');
            $table->integer('saturation');
            $table->boolean('dyspnee');
            $table->boolean('tirage');
            $table->boolean('balancement');
            $table->boolean('bruits');
            $table->boolean('autre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametres_vitaux');
    }
}
