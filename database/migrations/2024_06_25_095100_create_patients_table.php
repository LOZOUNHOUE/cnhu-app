<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenoms');
            $table->string('adresse')->nullable();
            $table->string('personne_a_prevenir')->nullable();
            $table->string('ethnie')->nullable();
            $table->string('religion')->nullable();
            $table->integer('age')->nullable();
            $table->dateTime('date_heure_arrivee')->nullable();
            $table->string('transport')->nullable();
            $table->string('motif_entree')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('telephone')->nullable();
            $table->string('profession')->nullable();
            $table->string('provenance')->nullable();
            $table->string('accompagnant')->nullable();
            $table->string('maladie_naturelle')->nullable();
            $table->string('rixe')->nullable();
            // Ajoutez d'autres colonnes selon vos besoins
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
        Schema::dropIfExists('patients');
    }
}
