<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaintesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plaintes', function (Blueprint $table) {
            $table->id();
            $table->boolean('contre_inconnu');
            $table->string('source_de_la_plainte');
            $table->string('type_de_la_plainte');
            $table->string('reference');
            $table->date('date_inscription');
            $table->date('date_des_faits');
            $table->string('lieu_des_faits');
            $table->string('objet');
            $table->string('nom_plaignant1');
            $table->string('prenom_plaignant1');
            $table->string('genre_plaignant1');
            $table->string('cin_plaignant1');
            $table->string('avocat_plaignant1');
            $table->string('nom_plaignant2')->nullable();
            $table->string('prenom_plaignant2')->nullable();
            $table->string('genre_plaignant2')->nullable();
            $table->string('cin_plaignant2')->nullable();
            $table->string('avocat_plaignant2')->nullable();
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
        Schema::dropIfExists('plaintes');
    }
}
