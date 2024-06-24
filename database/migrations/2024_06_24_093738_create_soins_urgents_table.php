<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoinsUrgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soins_urgents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->boolean('gestesTechniques_abordVeineux');
            $table->boolean('oxygene');
            $table->boolean('ventilation');
            $table->boolean('sondeVessie');
            $table->boolean('intubation');
            $table->boolean('membres');
            $table->boolean('platre');
            $table->boolean('transfusion');
            $table->boolean('perfusions');
            $table->string('autres');
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
        Schema::dropIfExists('soins_urgents');
    }
}
