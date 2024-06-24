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
            $table->string('prenom');
            $table->string('adresse');
            $table->string('telephone');
            $table->date('dateNaissance');
            $table->integer('age');
            $table->string('sexe');
            $table->string('ref');
            $table->string('profession');
            $table->string('nbEnfant');
            $table->string('pob');
            $table->string('maladieNaturelle');
            $table->string('lieuReponse');
            $table->string('personneAReevoir');
            $table->date('dateHeureArriveCUAU');
            $table->string('transportPar');
            $table->string('provenance');
            $table->string('accompagne');
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