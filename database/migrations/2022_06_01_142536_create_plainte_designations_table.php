<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlainteDesignationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plainte_designations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plainte_id')->constrained()->unique();
            $table->string('reference_plainte');
            $table->string('vice_procureur_name');
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
        Schema::dropIfExists('plainte_designations');
    }
}
