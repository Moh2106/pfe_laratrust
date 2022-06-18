<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvReponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_reponses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pv_id')->constrained();
            $table->string('numero_envoi');
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
        Schema::dropIfExists('pv_reponses');
    }
}
