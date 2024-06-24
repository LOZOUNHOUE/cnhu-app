<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipesAccueilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipes_accueil', function (Blueprint $table) {
            $table->id();
            $table->string('chirurgien');
            $table->string('medecin');
            $table->string('infirmier');
            $table->string('ide');
            $table->string('as');
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
        Schema::dropIfExists('equipes_accueil');
    }
}
