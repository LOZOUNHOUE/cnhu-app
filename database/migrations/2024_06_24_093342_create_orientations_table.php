<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrientationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orientations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->boolean('externe');
            $table->boolean('miseSEnObservation');
            $table->boolean('transferHopitalisation');
            $table->boolean('chirurgie');
            $table->boolean('medecine');
            $table->boolean('pediatrie');
            $table->boolean('autre');
            $table->boolean('decesAvantArrive');
            $table->date('dateHeureSortieCUAU');
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
        Schema::dropIfExists('orientations');
    }
}
