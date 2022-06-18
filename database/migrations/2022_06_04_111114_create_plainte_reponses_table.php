<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlainteReponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plainte_reponses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plainte_id')->constrained();
            $table->string('reference_plainte');
            $table->string('vice_procureur_name');
            $table->string('reponse');
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
        Schema::dropIfExists('plainte_reponses');
    }
}
