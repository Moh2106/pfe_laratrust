<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvs', function (Blueprint $table) {
            $table->id();
            $table->string('police_judiciaire');
            $table->string('classe_de_la_police');
            $table->string('source_pv');
            $table->date('date_enregistrement');
            $table->bigInteger('numero_envoi');
            $table->date('date_inscription');
            $table->string('type_enregistrement');
            $table->string('sujet_pv');
            $table->boolean('contre_inconnu')->default(false);
            $table->string('nom_personne_pv1');
            $table->string('prenom_personne_pv1');
            $table->string('genre_personne_pv1');
            $table->string('cin_personne_pv1');
            $table->string('avocat_personne_pv1');
            $table->string('nom_personne_pv2')->nullable();
            $table->string('prenom_personne_pv2')->nullable();
            $table->string('genre_personne_pv2')->nullable();
            $table->string('cin_personne_pv2')->nullable();
            $table->string('avocat_personne_pv2')->nullable();
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
        Schema::dropIfExists('pvs');
    }
}
